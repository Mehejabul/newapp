<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BasicSetting;
use App\Models\SocialInfo;
use App\Models\ContactInfo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\str;
use Illuminate\Support\Facades\Session;
use Image;
use File;

class ManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function basic_index(){
        $datas =  BasicSetting::where('basic_status',1)->where('basic_id',1)->firstorFail();
       return view('admin.setting.basic',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function basic_update(Request $request)
    {

     $basic = BasicSetting::where('basic_id',1)->firstorFail();
    //basic_logo
     if($request->hasfile('basic_logo')){
        $header_logo = $request->file('basic_logo');
        $header_logo_name = 'hlogo'. '-' . time() . rand(10000,1000000) . '.' . $header_logo->getClientOriginalExtension();
        Image::make($header_logo)->save('uploads/settings/header_logo/'.$header_logo_name);
     }else{
        $header_logo_name = $basic->basic_logo;
     }

//basic_footer_logo
  if($request->hasfile('basic_flogo')){
    $footer_logo = $request->file('basic_flogo');
    $footer_logo_name = 'footer' . '_' .rand(100000, 1000000) . time() . '.' .$footer_logo->getClientOriginalExtension();
    Image::make($footer_logo)->save('uploads/settings/footer_logo/'.$footer_logo_name);
  }else{
    $footer_logo_name = $basic->basic_flogo;
  }

   //basic_favicon
    if($request->hasfile('basic_favicon')){
        $fav_icon = $request->file('basic_favicon');
        $fav_icon_name = 'favicon' . '_' . rand(10000,100000) . time() . '.' .$fav_icon->getClientOriginalExtension();
        Image::make($fav_icon)->save('uploads/settings/favicon/'.$fav_icon_name);
    }else{
        $fav_icon_name = $basic->basic_favicon;
    }

    $update = BasicSetting::where('basic_id', 1)->where('basic_status',1)->update([
        'basic_company' => $request['basic_company'],
        'basic_title' => $request['basic_title'],
        'basic_logo' => $header_logo_name,
        'basic_flogo' => $footer_logo_name,
        'basic_favicon' => $fav_icon_name,
        'basic_ftext' => $request['basic_ftext'],
        'basic_newstext' => $request['basic_newstext'],
        'updated_at' => Carbon::now()->toDateTimestring(),
    ]);

        if($update){
            Session::flash('success', 'Successfully Updated');
            return redirect()->back();
        }else{
            Session::flash('error', 'Opps! Updated Failed');
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function social_index(){
        $data = SocialInfo::where('sm_status',1)->where('sm_id',1)->firstOrFail();
        return view('admin.setting.social',compact('data'));
     }

    public function social_update(Request $request)
    {

        $social_update = SocialInfo::where('sm_id',1)->update([
            'sm_facebook' => $request['sm_facebook'],
            'sm_twitter' => $request['sm_twitter'],
            'sm_linkedin' => $request['sm_linkedin'],
            'sm_dribble' => $request['sm_dribble'],
            'sm_youtube' => $request['sm_youtube'],
            'sm_slack' => $request['sm_slack'],
            'sm_instagram' => $request['sm_instagram'],
            'sm_behance' => $request['sm_behance'],
            'sm_google' => $request['sm_google'],
            'sm_raddit' => $request['sm_raddit'],
            'sm_status' => 1,
            'updated_at' =>Carbon::now()->toDateTimestring(),
        ]);
        if($social_update){
            Session::flash('success','Succefully Update Social Media');
            return redirect()->back();
        }else{
            Session::flash('error','Social Media Udate Filed');
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
    public function contact_index()
    {
        $data = ContactInfo::where('cont_id',1)->where('cont_status',1)->firstOrFail();
        return view('admin.setting.contact',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact_update(Request $request)
    {
        $cont_update = ContactInfo::where('cont_id',1)->update([
              'cont_phone1' => $request['cont_phone1'],
              'cont_phone2' => $request['cont_phone2'],
              'cont_phone3' => $request['cont_phone3'],
              'cont_phone4' => $request['cont_phone4'],
              'cont_email1' => $request['cont_email1'],
              'cont_email2' => $request['cont_email2'],
              'cont_email3' => $request['cont_email3'],
              'cont_email4' => $request['cont_email4'],
              'cont_add1'   => $request['cont_add1'],
              'cont_add2'   => $request['cont_add2'],
              'cont_add3'   => $request['cont_add3'],
              'cont_add4'   => $request['cont_add4'],
              'cont_status' => 1,
              'updated_at'  =>Carbon::now()->toDateTimestring(),
        ]);
if($cont_update){
    session::flash('success','successfully update');
    return redirect()->back();
}else{
    session::flash('error','update failed');
    return redirect()->back();
}

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
