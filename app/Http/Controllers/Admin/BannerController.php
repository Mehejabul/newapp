<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\str;
use Illuminate\Support\Facades\Session;
use Image;
use File;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
 $benners = Banner::where('banner_status',1)->orderBy('banner_id', 'DESC')->get();
     return view('admin.banner.index',compact('benners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
      return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        // dd($request->all());
      $this->validate($request,[
        'banner_title' => 'required',
        'banner_mid_title' => 'required',
        'banner_Sub_title' => 'required',
        'banner_button' => 'required',
        'banner_url' => 'required',
        'banner_order' => 'required',
      ],[
        'banner_title' => 'Please insert banner title',
        'banner_mid_title' => 'Please insert banner middle title',
        'banner_Sub_title' => 'Please insert banner sub title',
        'banner_button' => 'Please insert banner button',
        'banner_url' => 'Please insert banner url',
        'banner_order' => 'Please insert banner order',
      ]);

      if($request->hasfile('banner_image')){
        $image = $request->file('banner_image');
        $ban_image = "banner" . time() . rand(100000,1000000) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(250,250)->save('uploads/banner/' .$ban_image);
      } else{
         $ban_image = '';
      }

        $insert = Banner::insert([
        'banner_title' => $request['banner_title'],
        'banner_mid_title' => $request['banner_mid_title'],
        'banner_Sub_title' => $request['banner_Sub_title'],
        'banner_button' => $request['banner_button'],
        'banner_url' => $request['banner_url'],
        'banner_order' => $request['banner_order'],
        'banner_image' => $ban_image,
        'banner_publish' => Auth::id(),
        'banner_creator' => Auth::id(),
        'banner_slug' => Str::slug($request->banner_title, '-'),
        'banner_status' => 1,
        'Created_at' => Carbon::now()->toDateTimestring(),

      ]);
       if($insert){
        Session::flash('success', 'Successfully Insert user');
        return redirect()->back();
       }else{
        Session::flash('error', 'Insert failed');
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
      $datas = Banner::where('banner_status',1)->where('banner_slug', $slug)->firstorFail();
       return view('admin.banner.edite', compact('datas'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
