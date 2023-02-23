<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\str;
use Illuminate\Support\Facades\Session;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::where('tag_status',1)->orderBy('tag_id',"Desc")->get();
          return view('admin.tag.index',compact('tags'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
             //dd($request->all());
        $this->validate($request,[
           "tag_name" => 'required',
        ],[
            'tag_name.required' => 'Please enter tag name',

        ]);

     $insert = Tag::create([
          'tag_name' => $request['tag_name'],
          'tag_remarks' => $request['tag_remarks'],
          'tag_slug' =>str::slug($request->tag_name, '-'),
          'tag_status' => 1,
           'created_at' => Carbon::now()->todateTimestring()
        ]);
        if($insert) {
            Session::flash('success', 'Successfully insert');
            return redirect()->back();
        }else{
            Session::flash('error', 'insert failed' );
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {

           $data = Tag::where('tag_status',1)->where('tag_slug',$slug)->firstOrFail();
            return view('admin.tag.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $this->validate($request,[
           "tag_name" => 'required',
        ],[
            'tag_name.required' => 'Please enter tag name',

        ]);

        $update = Tag::where('tag_status',1)->where('tag_slug',$slug)->update([
          'tag_name' => $request['tag_name'],
          'tag_remarks' => $request['tag_remarks'],
          'tag_slug' =>$slug,
          'tag_status' => 1,
           'updated_at' => Carbon::now()->todateTimestring()
        ]);

      if($update){
         session::flash('success','Successfully updated');
          return redirect()->back();
      }else{
        session::flash('error','updated_failed');
        return redirect()->back();
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

 public function softelete($slug)
    {
      $softdel = Tag::where('tag_status',1)->where('tag_slug',$slug)->update([
         'tag_status' => 0,
         'updated_at' => Carbon::now()->todateTimestring()
      ]);

      if($softdel){
        session::flash('success','Successfully delete');
        return redirect()->back();
      }else{
        session::flash('error',"delete failed");
        return redirect()->back();
      }
    }

    public function restore($slug)
    {
       $restore = Tag::where('tag_status',0)->where('tag_slug',$slug)->update([
           'tag_status' => 1,
           'updated_at' => Carbon::now()->todateTimestring()
       ]);

       if($restore){
        session::flash('success',"successfully restore");
         return redirect()->back();
       }else{
        session::flash('error');
          return redirect()->back();
       }
    }

    public function destroy($slug)
    {
      $delete = Tag::where('tag_status',0)->where('tag_slug',$slug)->forceDelete();

      if($delete){
        session::flash('success','successfully parmanent delete');
        return redirect()->back();

      }else{
        session::flash('error','deleted failed');
        return redirect()->back();
      }
    }
}
