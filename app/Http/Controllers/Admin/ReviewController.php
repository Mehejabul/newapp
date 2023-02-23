<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Support\Carbon;
use Illuminate\Support\str;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Image;
Use File;


class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $reviewer = Review::where('reviewer_status',1)->orderBy('reviewer_id','DESC')->get();
         return view('admin.review.index',compact('reviewer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.review.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
         'reviewer_name' => ['required'],
         'reviewer_image' => ['required'],
       ],[
        'reviewer_name.required' => 'please insert name!',
        'reviewer_image' => 'please insert review image!',
       ]);

       //review image
        if($request->hasFile('reviewer_image')){
        $image = $request->file('reviewer_image');
        $review_image = "riview" . time() . rand(100000,1000000) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(250,250)->save('uploads/review/' .$review_image);
        }else{
            $review_image = '';
        }

        $insert = Review::create([
           'reviewer_name' => $request['reviewer_name'],
           'reviewer_description' => $request['reviewer_description'],
           'reviewer_image' => $review_image,
           'reviewer_youtube' => $request['reviewer_youtube'],
           'reviewer_instagram' => $request['reviewer_instagram'],
           'reviewer_twitter' => $request['reviewer_twitter'],
           'reviewer_facebook' => $request['reviewer_facebook'],
           'reviewer_slug' => Str::slug($request->reviewer_name, '-'),
           'reviewer_status' => 1,
           'created_at' => Carbon::now()

        ]);

        if($insert){
            Session::flash('success','Successfully insert');
            return redirect()->back();
        }else{
            Session::flash('error', 'Opps!someting error');
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
        $data = Review::where('reviewer_status',1)->where('reviewer_slug',$slug)->firstorFail();
        return view('admin.review.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        //  dd($request->all());
         $this->validate($request,[
         'reviewer_name' => ['required'],
       ],[
        'reviewer_name.required' => 'please insert name!',
       ]);


  $r_img = Review::where('reviewer_status',1)->where('reviewer_slug',$slug)->firstOrFail();
            if ($request->hasFile('reviewer_image') ) {
            if (File::exists('uploads/review/'. $r_img->reviewer_image)) {
              File::delete('uploads/review/' . $r_img->reviewer_image);
         }

        $image = $request->file('reviewer_image');
        $review_image = "rivew" . time() . rand(10000,1000000) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(250,250)->save('uploads/review/' .$review_image);

       }else{
            $review_image = $r_img->reviewer_image;
       }


       $update = Review::where('reviewer_status',1)->where('reviewer_slug',$slug)->update([

         'reviewer_name' => $request['reviewer_name'],
           'reviewer_description' => $request['reviewer_description'],
           'reviewer_image' => $review_image,
           'reviewer_youtube' => $request['reviewer_youtube'],
           'reviewer_instagram' => $request['reviewer_instagram'],
           'reviewer_twitter' => $request['reviewer_twitter'],
           'reviewer_facebook' => $request['reviewer_facebook'],
           'reviewer_slug' => $slug,
           'reviewer_status' => 1,
           'updated_at' => Carbon::now()
       ]);

    if($update){
         Session::flash('success', 'sucessfully update');
         return redirect()->back();
    }else{
         Session::flash('error', 'updated failed!');
          return redirect()->back();
    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

public function softelete($slug)
    {
        $softdel = Review::where('reviewer_status',1)->where('reviewer_slug',$slug)->update([
            'reviewer_status' => 0,
            'updated_at' =>Carbon::now(),
        ]);

       if($softdel){
         Session::flash('success', 'sucessfully delete');
         return redirect()->back();
    }else{
         Session::flash('error', 'Deleted failed');
          return redirect()->back();
    }
    }

    public function destroy($id)
    {
        //
    }
}
