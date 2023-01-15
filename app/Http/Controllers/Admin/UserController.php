<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\str;
use Illuminate\Support\Facades\Session;
use Image;
use File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $all_user = User::where('status', 1)->orderBy('id', 'DESC')->get();
               return view('admin.user.index', compact('all_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
      return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
       $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' =>['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
       ],[
              'name.required' => 'Please Insert the name',
              'email.required' => 'Please Insert the email',
              'phone.required' => 'Please Insert the Phone Number',
              'password.required' => 'Please Insert the Password',
       ]);

       //User Image
       if($request->hasfile('photo')){
          $image = $request->file('photo');
          $user_img = 'user' . time() . rand(100000,100000) . '.' . $image->getClientOriginalExtension();
          Image::make($image)->resize(100,100)->save('uploads/user/image/' . $user_img);
       }else{
        $user_img = '';
       }

       $insert = User::insertGetId([
             'name' => $request['name'],
             'phone' => $request['phone'],
             'email' => $request['email'],
             'photo' => $user_img,
             'password' => Hash::make($request->password),
             'slug'=> Str::slug($request->name, '-'),
             'address' => $request['address'],
             'status' => 1,
             'created_at' => Carbon::now()->toDateTimestring(),

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
    public function show($slug){
        $all_user = User::where('status', 1)->where('slug',$slug)->firstOrfail();
        return view('admin.user.show',compact('all_user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug){
      $edit_user = User::where('status',1)->where('slug',$slug)->firstOrFail();
      return view('admin.user.edit',compact('edit_user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug){

      $this->validate($request,[

        'name' => ['required'],
        'phone' => ['required'],
      ],[

        'name.required' => 'Please edit your name',
        'phone.required' => 'Please edit your phone',
      ]);

      if($request->hasfile('photo')){
        $image = $request->file('photo');
        $user_image = 'user_edit' . time() . rand(100000,100000) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(50,50)->save('Uploads/user/image/' . $user_image);

      }else{
        $user_image = '';
      }

      $update = User::where('slug',$slug)->where('status', 1)->update([
         'name' => $request['name'],
         'phone' => $request['phone'],
         'email' => $request['email'],
         'photo' => $user_image,
         'slug' => $slug,
         'status' => 1,
        'updated_at' => Carbon::now()->toDateTimestring(),

      ]);

      if($update){
        Session::flash('success', 'Successfully Update');
        return redirect()->back();
      }else{
        Session::flash('error', 'update failed');
        return redirect()->back();
      }


    }

     public function softdelete($slug){
       $softdel = User::where('status',1)->where('slug',$slug)->update([
         'status' => 0,
         'updated_at' => Carbon::now()->toDateTimestring(),
       ]);

         if($softdel){
            Session::flash('success', 'Successfully delete');
             return redirect()->back();
       }else{
             Session::flash('error', 'delete Failed');
             return  redirect()->back();
       }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($slug){
      $restore = User::where('status',0)->where('slug',$slug)->update([
       'status' => 1,
       'updated_at' => Carbon::now()->toDatetimestring(),
      ]);
      if($restore){
        Session::flash('success','Sucessfully restore');
        return redirect()->back();
      }else{
        Session::flash('error','restore Failed');
        return redirect()->back();
      }
    }
    public function destroy($slug){
      $parmanent_delete = User::where('status',0)->where('slug',$slug)->forceDelete();

        if($parmanent_delete){
        Session::flash('success','Sucessfully Parmanent delete');
        return redirect()->back();
      }else{
        Session::flash('error','delete Failed');
        return redirect()->back();
      }
    }
}
