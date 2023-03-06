<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Content;
use Illuminate\Support\Carbon;
use Illuminate\Support\str;
use Illuminate\Support\Facades\Session;
use Auth;
use File;
use Image;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $contents = Content::where('content_status',1)->orderBy('content_id','DESC')->get();
          return view('admin.content.index',compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           "content_title" => 'required',
        ],[
            'content_title.required' => 'Please enter page name',

        ]);

        if($request->hasFile('content_image')){
         $image = $request->file('content_image');
         $cont_image = 'content' . time() . rand(10000,100000) . '.' . $image->getClientOriginalExtension();
         Image::make($image)->save('uploads/content/'.$cont_image);
        }else{
            $cont_image = '';
        }

        $insert = Content::create([
         'page_id' => $request['page_id'],
         'content_title' => $request['content_title'],
         'content_subtitle' => $request['content_subtitle'],
         'content_details' => $request['content_details'],
         'content_image' => $cont_image,
         'content_creator' => Auth::id(),
         'content_slug' =>str::slug('content' . uniqid()),
         'content_status' => 1,
         'created_at' => Carbon::now(),
        ]);

        if($insert){
            Session::flash('success', 'Successfully insert');
            return redirect()->back();
        }else{
            Session::flash('error', 'insert failed');
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
        $data = Content::where('content_status',1)->where('content_slug',$slug)->first();
        return view('admin.content.edit',compact('data'));
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
           "content_title" => 'required',
        ],[
            'content_title.required' => 'Please enter page name',

        ]);

       $content_image = Content::where('content_status',1)->where('content_slug',$slug)->firstOrFail();
             if ($request->hasFile('content_image') ) {
                if (File::exists('uploads/content/'. $content_image->content_image)) {
                   File::delete('uploads/content/' . $content_image->content_image);
               }
         $image = $request->file('content_image');
         $cont_image = 'content' . time() . rand(10000,100000) . '.' . $image->getClientOriginalExtension();
         Image::make($image)->save('uploads/content/'.$cont_image);
        }else{
            $cont_image = $content_image->content_image;
        }

        $update = Content::where('content_status',1)->where('content_slug',$slug)->update([
         'page_id' => $request['page_id'],
         'content_title' => $request['content_title'],
         'content_subtitle' => $request['content_subtitle'],
         'content_details' => $request['content_details'],
         'content_image' => $cont_image,
         'content_editor' => Auth::id(),
         'content_slug' => $slug,
         'content_status' => 1,
         'updated_at' => Carbon::now(),
        ]);

        if($update){
            Session::flash('success', 'Successfully update');
            return redirect()->back();
        }else{
            Session::flash('error', 'updated failed');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function softdelete($slug)
    {
        $softdel = Content::where('content_status',1)->where('content_slug', $slug)->update([
            'content_status' => 0,
            'updated_at' => carbon::now()
        ]);

         if($softdel){
            Session::flash('success', 'Successfully delete');
            return redirect()->back();
        }else{
            Session::flash('error', 'Delete failed');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        //
    }
}
