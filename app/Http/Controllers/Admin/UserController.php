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
            'role' =>['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
       ],[
              'name.required' => 'Please Insert the name',
              'email.required' => 'Please Insert the email',
              'phone.required' => 'Please Insert the Phone Number',
              'role.required' => 'Please Insert the Role id',
              'password.required' => 'Please Insert the Password',
       ]);

       //User Image
       if($request->hasfile('photo')){
          $image = $request->file('photo');
          $user_img = 'user' . time() . rand(100000,100000) . '.' . $image->getClientOriginalExtension();
          Image::make($image)->resize(100,100)->save('Uploads/user/image/' . $user_img);
       }else{
        $user_img = '';
       }

       $insert = User::insertGetId([
             'name' => $request['name'],
             'phone' => $request['phone'],
             'email' => $request['email'],
             'role' => $request['role'],
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
    public function edit($id)
    {
        //
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
