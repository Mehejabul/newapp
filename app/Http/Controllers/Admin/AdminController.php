<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    Public function __construct(){
       $this ->middleware('auth');

    }

    Public function index(){
        return view('admin.dashboard.index');
    }
}
