<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\str;
use Illuminate\Support\Facades\Session;

class RecycleController extends Controller
{
    public function user_index(){
     $data =User::where('status',0)->latest()->get();
     $ban = Banner::where('banner_status',0)->get();
        return view("admin.recycle.recycle",compact('data','ban'));
    }
    public function user_recycle(){
     $datas = User::where('status',0)->latest()->get();
        return view('admin.recycle.user_recycle',compact('datas'));
    }


    public function banner_recycle(){
        $datas = Banner::where('banner_status',0)->latest()->get();
        return view('admin.recycle.banner_recycle',compact('datas'));
    }
}
