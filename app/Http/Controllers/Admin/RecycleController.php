<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\str;
use Illuminate\Support\Facades\Session;

class RecycleController extends Controller
{
    public function index(){
     $data =User::where('status',0)->latest()->get();
        return view("admin.recycle.recycle",compact('data'));
    }
    public function AllRecycle(){
     $datas =User::where('status',0)->latest()->get();
        return view('admin.recycle.allrecycle',compact('datas'));
    }
}
