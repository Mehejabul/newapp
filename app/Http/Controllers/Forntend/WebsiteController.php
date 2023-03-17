<?php

namespace App\Http\Controllers\Forntend;

use App\Http\Controllers\Controller;
use App\Models\BasicSetting;
use App\Models\SocialInfo;
use App\Models\ContactInfo;
use App\Models\Banner;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\PostCategory;
use App\Models\Review;
use App\Models\Content;
use App\Models\Page;
use App\Models\Newslwtwer;
use App\Models\Consultant;
use App\Models\WebContact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\str;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class WebsiteController extends Controller
{
    public function index()
    {
        $datas =  BasicSetting::first();
        $socils = SocialInfo::first();
        $baner =  Banner::where('banner_status',1)->firstOrFail();
        return view('website.home',compact('datas','socils','baner'));
    }

    public function blog_grid(){
        $recent_post = Post:: with('Postcategory','creator')->orderBY("Post_id","ASC")->paginate(6);
        $users = User::where('status',1)->OrderBy('id','ASC')->first();
        return view('website.blog.blog_grid',compact('recent_post','users'));
    }

    public function blog_list(){
        $posts = Post::with('Postcategory','creator',)->orderBy("post_id","Asc")->limit(4)->paginate(4);
        $users = User::where('status',1)->OrderBy('id','ASC')->first();
        $popular_post = Post:: with('Postcategory','creator')->inRandomOrder()->limit(3)->get();
        $categories = PostCategory::get();
        $tags = Tag::all();
        $reviews = Review::get();
        return view('website.blog.blog_list', compact('posts','users','categories','popular_post','tags','reviews'));
    }

    public function blog_detail($url){
        $posts = Post::where('post_url', $url)->first();
        $releted_post = Post:: with('Postcategory','creator')->inRandomOrder()->limit(2)->get();
        $popular_post = Post:: with('Postcategory','creator')->inRandomOrder()->limit(3)->get();
        $tags = Tag::all();
        $users = User::where('status',1)->OrderBy('id','ASC')->first();
        $categories = PostCategory::get();
        $reviews = Review::get();
         return view('website.blog.blog_detail',compact('posts','releted_post','users','categories','popular_post','tags','reviews'));
    }

    public function tagWisePost($slug)
    {
        $tag = Tag::where('tag_slug', $slug)->with('posts')->first();

        if($tag){
              $post = Post::with('Postcategory','creator')->where('tag_id',$tag->tag_id)->get();
              $users = User::where('status',1)->OrderBy('id','ASC')->first();
              $popular_post = Post:: with('Postcategory','creator')->inRandomOrder()->limit(3)->get();
              $categories = PostCategory::get();
              $reviews = Review::get();
            return view('website.blog.tag_list',compact('tag','post','users','popular_post','categories','reviews'));

        }else{
            return redirect()->route('blog.detail');
        }

    }


     public function about(){
       $clients_love = Review::get();
          return view('website.pages.about', compact('clients_love'));
     }

     public function team(){
        return view('website.pages.team');
     }

     public function testimonial(){
        return view('website.pages.testimonial');
     }

     public function clients(){
        return view('website.pages.clients');
     }

     public function faq(){
        return view('website.pages.faq');
     }

     public function pricing(){
        return view('website.pages.pricing');
     }


    public function consult(Request $request)
    {
         $this->validate($request,[
           'name' =>'required',
           'email' => 'required',
           'subject' => 'required',
           'message' => 'required',

        ],[
            'name.required' => "please enter the name",
            'email.required' => "please enter your email",
            'subject.required' => "please enter Subject",
            'message.requireed' => "please enter message",

        ]);

        $insert = Consultant::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'subject' => $request['subject'],
            'message' => $request['message'],
            'slug' =>uniqid(),
            'status' => 1,
            'created_at' =>Carbon::now(),
        ]);

        if($insert){
            session::flash('success','Thank you! Please wait we will replay you soon');
            return redirect()->back();
        }else{
            session::flash('error','Opps! Pease try agin');
            return redirect()->back();
        }
    }


    public function newsleter(Request $request){
        //  dd($request->all());
        $this->validate($request,[
           'email' => 'required',
        ],[
            'email.required' => 'Please enter your email',
        ]);

        $newsleter = Newslwtwer::create([
             'email' => $request['email'],
             'created_at' => Carbon::now(),
        ]);

        $emails = $request['email'];

        Mail::to($emails)->send(new MyTestMail($emails));

        if($newsleter){
            session::flash('success', 'Thank you to subscribe us');
            return redirect()->back();
            session::flash('error', 'Opps! Please try later');
            return redirect->back();
        }

    }

    public function contact(){
            return view('website.pages.contact');
        }

    public function contact_submit(Request $request){
        $this->validate($request,[
           'name' => 'required',
           'email' => 'required',
           'subject' => 'required',
           'message' => 'required',
        ],[

            'name.required' => 'Please insert your name!',
            'email.required' => 'Please inset your email!',
            'subject.required' => 'Please inset your subject!',
            'message.required' => 'Please write your messae!',

        ]);

        $submit = WebContact::create([
           'name' => $request['name'],
           'email' => $request['email'],
           'phone' => $request['phone'],
           'subject' => $request['subject'],
           'message' => $request['message'],
           'slug' => uniqid(),
           'status' => 1,
           'created_at' => Carbon::now(),
        ]);

        if($submit){
            Session::flash('success','Please wait we will replay you soon');
            return redirect()->back();
        }else{
            Session::flash('error','Opps! Theres something Wrong');
            return redirect()->back();
        }




    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
