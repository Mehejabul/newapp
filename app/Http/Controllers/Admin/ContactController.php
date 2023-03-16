<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebContact;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function cont_info(){
        $cont_info = WebContact::where('status',1)->orderBy('id',"ASC")->get();
        return view('admin.contact.contact_info',compact('cont_info'));
    }

    public function destroy($slug){
        $dest = WebContact::where('status',1)->where('slug',$slug)->update([
           'status' => 0,
           'updated_at' => Carbon::now()
        ]);


    if($dest){
        session::flash('success','successfully delete');
        return redirect()->back();

    }else{
        session::flash('error', 'delete failed!');
        return redirect()->back();
    }
}

}
