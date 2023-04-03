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
        // return $request->all();
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

      if($request->hasFile('banner_image')){
        $image = $request->file('banner_image');
        $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save('uploads/banner/' .$imageName);
        $ban_image = 'uploads/banner/' . $imageName;
      }else {
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
    public function edit($banner_id)
    {
      $datas = Banner::where('banner_status',1)->where('banner_id', $banner_id)->firstOrFail();
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
       $this->validate($request,[
        'banner_title' => 'required',
        'banner_mid_title' => 'required',
        'banner_Sub_title' => 'required',
        'banner_button' => 'required',
        'banner_url' => 'required',
        'banner_order' => 'required',
       ]);
    $banner = Banner::where('banner_status',1)->where('banner_id',$id)->firstOrFail();
       if ($request->hasFile('banner_image') ) {
        if (File::exists('uploads/banner/'. $banner->banner_image)) {
            File::delete('uploads/banner/' . $banner->banner_image);
        }

     $image = $request->file('banner_image');
     $ban_image = "banner" . time() . rand(100000,1000000) . '.' . $image->getClientOriginalExtension();
     Image::make($image)->save('uploads/banner/' .$ban_image);

       }else{

            $ban_image = $banner->banner_image;
       }

    $ban_update = Banner::where('banner_status',1)->where('banner_id',$id)->update([
        'banner_title' => $request['banner_title'],
        'banner_mid_title' => $request['banner_mid_title'],
        'banner_Sub_title' => $request['banner_Sub_title'],
        'banner_button' => $request['banner_button'],
        'banner_url' => $request['banner_url'],
        'banner_order' => $request['banner_order'],
        'banner_image' => $ban_image,
        'banner_publish' => Auth::id(),
        'banner_editor' => Auth::id(),
        'banner_slug' => Str::slug($request->banner_title, '-'),
        'banner_status' => 1,
        'updated_at' => Carbon::now()->toDateTimestring(),

    ]);

        if($ban_update) {
            Session::flash('success','Successfully updated');
            return redirect()->back();
        }else{
            Session::flash('error', 'Updated failed');
            return redirect()->back();
        }
    }

      public function softdelete($slug){
      $softdel = Banner::where('banner_status',1)->where('banner_slug',$slug)->update([
            'banner_status' => 0,
             'updated_at' =>Carbon::now()->toDateTimestring(),
      ]);

      if($softdel){
        Session::flash('success', 'successfully delete');
        return redirect()->back();
      }else{
        Session::flash('error', "delete failed");
        return redirect()->back();
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function restore($slug){
     $restore = Banner::where('banner_status',0)->where('banner_slug',$slug)->update([
       'banner_status' => 1,
       'updated_at' => Carbon::now()->toDatetimestring(),
      ]);
      if($restore){
        Session::flash('success','Sucessfully  Banner restore');
        return redirect()->back();
      }else{
        Session::flash('error',' Banner restore Failed');
        return redirect()->back();
      }
}

    public function destroy($banner_id) {
      $parmanent_delete = Banner::where('banner_status',0)->where('banner_id',$banner_id)->forceDelete();

        if($parmanent_delete){
        Session::flash('success','Sucessfully Parmanent delete');
        return redirect()->back();
      }else{
        Session::flash('error','delete Failed');
        return redirect()->back();
      }
    }
}
