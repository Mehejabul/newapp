<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Carbon;
use Illuminate\Support\str;
use Illuminate\Support\Facades\Session;
use Auth;
use File;
use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datas = Post::where('post_status',1)->OrderBy('post_id', 'DESC')->get();
        return view('admin.post.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('admin.post.create',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
       $this->validate($request,[
         'postcate_id' => ['required'],
         'post_title' => ['required'],
         'post_subtitle' => ['required'],
       ],[
        'postcate_id.required' => 'please insert post category id',
        'post_title.required' => 'please insert post title',
        'post_subtitle.required' => 'please insert post subtitle',
       ]);

       //post image
        if($request->hasFile('post_feature_image')){
        $image = $request->file('post_feature_image');
        $post_image = "post" . time() . rand(100000,1000000) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(250,250)->save('uploads/post/' .$post_image);
        }else{
            $post_image = '';
        }

        $insert = Post::create([
           'postcate_id' => $request['postcate_id'],
           'post_title' => $request['post_title'],
           'post_subtitle' => $request['post_subtitle'],
           'post_details' => $request['post_details'],
           'post_feature' => 0,
           'post_feature_image' => $post_image,
           'post_url' => $request['post_url'],
           'post_creator' => Auth::id(),
           'post_slug' => Str::slug($request->post_title, '-'),
           'post_status' => 1,
           'created_at' => Carbon::now()

        ]);

        $insert->tags()->attach($request->tags);

        if($insert){
            Session::flash('success','Successfully insert');
            return redirect()->back();
        }else{
            Session::flash('error', 'Opps!someting error');
            return redirect()->back();
        }
      }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Post::where('post_status',1)->where('post_id',$id)->firstorFail();
       return view('admin.post.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = Tag::all();
        $data = Post::where('post_status',1)->where('post_id',$id)->firstorFail();
        return view('admin.post.edite',compact(['data','tags']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $this->validate($request,[
           'post_title' => ['required'],
           'post_subtitle' => ['required'],
       ],[
           'post_title.required' => 'please update post title',
           'post_subtitle.required' => 'please update post subtitle',
       ]);

    $feature_image = Post::where('post_status',1)->where('post_id',$id)->firstOrFail();

     if ($request->hasFile('post_feature_image') ) {
         if (File::exists('uploads/post/'. $feature_image->post_feature_image)) {
            File::delete('uploads/post/' . $feature_image->post_feature_image);
     }
     $image = $request->file('post_feature_image');
     $post_image = "post" . time() . rand(10000,1000000) . '.' . $image->getClientOriginalExtension();
     Image::make($image)->resize(250,250)->save('uploads/post/' .$post_image);

       }else{
            $post_image = $feature_image->post_feature_image;
       }

      $post_update = Post::where('post_status',1)->where('post_id',$id)->update([
           'postcate_id' => $request['postcate_id'],
           'post_title' => $request['post_title'],
           'post_subtitle' => $request['post_subtitle'],
           'post_details' => $request['post_details'],
           'post_feature' => 0,
           'post_feature_image' => $post_image,
           'post_url' => $request['post_url'],
           'post_editor' => Auth::id(),
           'post_slug' => Str::slug($request->post_title, '-'),
           'post_status' => 1,
           'updated_at' => Carbon::now()
      ]);

    // $post_update->tags()->sync($request->tags[]);


if($post_update){
    Session::flash('success', 'sucessfully update');
    return redirect()->back();
}else{
    Session::flash('error', 'updated failed!');
    return redirect()->back();
}

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function softdelete($id)
    {
        $post_softdel = Post::where('post_status',1)->where('post_id',$id)->update([
            'post_status' => 0,
            'updated_at' => Carbon::now()
        ]);
            if($post_softdel){
                Session::flash('success','successfully delete');
                return redirect()->back();

            }else{
                Session::flash('error', 'Delete failed');
                return redirect()->back();
            }
    }

    public function restore($id){
       $restore = Post::where('post_status',0)->where('post_id',$id)->update([
       'post_status' => 1,
       'updated_at' => Carbon::now()->toDatetimestring(),
      ]);
      if($restore){
        Session::flash('success','Sucessfully  post restore');
        return redirect()->back();
      }else{
        Session::flash('error',' post restore Failed');
        return redirect()->back();
      }
    }

    public function destroy($id)
    {
     $parmanent_delete = Post::where('post_status',0)->where('post_id',$id)->forceDelete();

        if($parmanent_delete){
        Session::flash('success','Sucessfully Parmanent delete');
        return redirect()->back();
      }else{
        Session::flash('error','delete Failed');
        return redirect()->back();
      }
    }

}
