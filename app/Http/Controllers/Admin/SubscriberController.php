<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Newslwtwer;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;


class SubscriberController extends Controller
{
    public function index(){
        $subscriber = Newslwtwer::where('status',1)->orderBy('id','ASC')->get();
        return view('admin.subscriber.index',compact('subscriber'));
    }

    public function destroy($id){
        $destroy = Newslwtwer::where('status',1)->where('id',$id)->update([
          'status' => 0,
          'created_at' => Carbon::now()
        ]);

        if($destroy){
            session::flash('success','successfully delete');
            return redirect()->back();
        }else{
            session::flash('error','delete failed');
            return redirect()->back();
        }
    }
}
