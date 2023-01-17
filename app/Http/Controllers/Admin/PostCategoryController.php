<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\str;
use Illuminate\Support\Facades\Session;
use Auth;

class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = PostCategory::where('postcate_status',1)->orderBy('postcate_id','Desc')->get();
        return view('admin.postcategory.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.postcategory.create');
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
           "postcate_name" => 'required',
           "postcate_url" =>  'required',
        ],[
            'postcate_name.required' => 'Please enter post category name',
            'postcate_url.required' => 'please enter the post catrgoty url',

        ]);

     $insert = Postcategory::create([
          'postcate_name' => $request['postcate_name'],
          'postcate_remarks' => $request['postcate_remarks'],
          'postcate_url' => $request['postcate_url'],
          'postcate_slug' =>str::slug($request->postcate_name, '-'),
          'postcate_creator' => Auth::id(),
          'postcate_status' => 1,
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
    public function show($slug)
    {
        $all_category = PostCategory::where('postcate_status',1)->where('postcate_slug',$slug)->firstOrFail();
         return view('admin.postcategory.show',compact('all_category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $data = PostCategory::where('postcate_status',1)->where('postcate_slug',$slug)->firstOrFail();
         return view('admin.postcategory.edite',compact('data'));
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
           'postcate_name' => ['required'],
           'postcate_url' => ['required'],
        ],[

            'postcate_name.required' => 'pleae insert post category name',
            'postcate_url.required' => 'pleae insert post category url',

        ]);
   $update = Postcategory::where('postcate_status',1)->where('postcate_slug',$slug)->update([
        'postcate_name' => $request['postcate_name'],
        'postcate_remarks' => $request['postcate_remarks'],
        'postcate_url' => $request['postcate_url'],
        'postcate_editor' => Auth::id(),
        'postcate_slug' => $slug,
        'postcate_status' =>1,
        'updated_at' => Carbon::now()->todatetimestring(),

   ]);

    if($update) {
        Session::flash('success', 'update sucessfully');
        return redirect()->back();
    }else{
        Session::flash('error', 'update failed');
        return redirect()->back();
    }

    }

     public function softdelete($slug)
    {
        $softdelete = PostCategory::where('postcate_status',1)->where('postcate_slug',$slug)->update([
             'postcate_status' => 0,
             'updated_at' => Carbon::now()->todateTimestring(),

        ]);

        if($softdelete) {
            Session::flash('success','sucessfully delete');
            return redirect()->back();
        }else{
            Session::flash('error','delete failed');
            return rediect()->back();
        }
    }

    public function restore($slug){
     $restore = PostCategory::where('postcate_status',0)->where('postcate_slug',$slug)->update([
           'postcate_status' => 1,
           'updated_at' => Carbon::now()->toDatetimestring(),
      ]);
         if($restore){
             Session::flash('success','Sucessfully  category restore');
             return redirect()->back();
        }else{
             Session::flash('error',' Category restore Failed');
             return redirect()->back();
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug){

      $parmanent_delete = PostCategory::where('postcate_status',0)->where('postcate_slug',$slug)->forceDelete();

           if($parmanent_delete){
               Session::flash('success','Sucessfully Parmanent delete');
               return redirect()->back();
           }else{
               Session::flash('error','delete Failed');
              return redirect()->back();
          }

      }
   }
