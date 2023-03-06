<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\str;
use Illuminate\Support\Facades\Session;
use Auth;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::where('page_status',1)->orderBy('page_id','Desc')->get();
        return view('admin.page.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
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
           "page_name" => 'required',
        ],[
            'page_name.required' => 'Please enter page name',

        ]);

        $insert = Page::create([
          "page_name" => $request['page_name'],
          "page_url" => $request['page_url'],
          "page_order" => $request['page_order'],
          "page_creator" => Auth::id(),
          "page_slug" => Str::slug($request->page_name,'-'),
          "page_status" => 1,
           'created_at' => Carbon::now()->todateTimestring(),
        ]);

        if($insert){
            Session::flash('success', 'Successfully insert');
             return redirect()->back();
        }else{
            Session::flash('error', 'Insert Failed');
            return redirect->back();
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
        $data = Page::where('page_status',1)->where('page_slug',$slug)->first();
        return view('admin.page.edit', compact('data'));
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
           "page_name" => 'required',
        ],[
            'page_name.required' => 'Please enter Page name',

        ]);

        $update = Page::where('page_status',1)->where('page_slug',$slug)->update([
          "page_name" => $request['page_name'],
          "page_url" => $request['page_url'],
          "page_order" => $request['page_order'],
          "page_editor" => Auth::id(),
          "page_slug" => $slug,
          "page_status" => 1,
          'updated_at' => Carbon::now()->todateTimestring(),
        ]);

        if($update){
            Session::flash('success', 'Successfully update');
             return redirect()->back();
        }else{
            Session::flash('error', 'update Failed');
            return redirect->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     *
     */
public function softdelete($slug)
    {
  $softdel = Page::where('page_status',1)->where('page_slug',$slug)->update([
   'page_status' => 0,
   'updated_at' => Carbon::now()->todateTimestring(),
  ]);

  if($softdel){
            Session::flash('success', 'Successfully delete');
             return redirect()->back();
        }else{
            Session::flash('error', 'Delete Failed');
            return redirect->back();
        }


    }

    public function destroy($id)
    {
        //
    }
}
