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
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $datas =  BasicSetting::where('basic_status',1)->where('basic_id',1)->firstorFail();
         $socils = SocialInfo::where('sm_status',1)->where('sm_id',1)->firstorFail();
         $baner =  Banner::where('banner_status',1)->firstOrFail();

        return view('website.home',compact('datas','socils','baner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog_grid(){
        $recent_post = Post:: with('Postcategory','creator')->orderBY("created_at","DESC")->paginate(6);
        $users = User::where('status',1)->OrderBy('id','ASC')->first();
        return view('website.blog.blog_grid',compact('recent_post','users'));
    }

    public function blog_list(){
        $posts = Post::with('Postcategory','creator',)->orderBy("post_id","Asc")->limit(4)->get();
        $users = User::where('status',1)->OrderBy('id','ASC')->first();
        $popular_post = Post:: with('Postcategory','creator')->inRandomOrder()->limit(3)->get();
        $categories = PostCategory::get();
        $tags = Tag::all();
        return view('website.blog.blog_list', compact('posts','users','categories','popular_post','tags'));
    }

    public function blog_detail(){
        $posts = Post::with('Postcategory','creator',)->orderBy("post_id","Asc")->limit(1)->get();
        $releted_post = Post:: with('Postcategory','creator')->inRandomOrder()->limit(2)->get();
        $popular_post = Post:: with('Postcategory','creator')->inRandomOrder()->limit(3)->get();
        $tags = Tag::all();
        $users = User::where('status',1)->OrderBy('id','ASC')->first();
         $categories = PostCategory::get();
         $reviews = Review::get();
         return view('website.blog.blog_detail',compact('posts','releted_post','users','categories','popular_post','tags','reviews'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

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


    public function store(Request $request)
    {
        //
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
