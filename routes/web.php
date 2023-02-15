<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\RecycleController;
use App\Http\Controllers\Admin\ManageController;
use App\Http\Controllers\Admin\PostCategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Forntend\WebsiteController;


use App\Http\Controllers\Admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//Website route

Route::get('/',[WebsiteController::class,'index'])->name('website.index');
Route::get('/blog/grid',[WebsiteController::class,'blog_grid'])->name('blog.grid');
Route::get('/blog/list',[WebsiteController::class,'blog_list'])->name('blog.list');
Route::get('/blog/detail',[WebsiteController::class,'blog_detail'])->name('blog.detail');







//admin route
Route::group(['prefix' => 'admin','middleware' => ['auth']], function(){
    Route::get('/',[AdminController::class,'index'])->name('admin.index');

});

//user route
    Route::get('/user',[UserController::class,'index'])->name('user.index');
    Route::get('/user/create',[UserController::class,'create'])->name('user.create');
    Route::post('/user',[UserController::class,'store'])->name('user.store');
    Route::get('/user/show/{slug}',[UserController::class,'show'])->name('user.show');
    Route::get('user/edite/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::PUT('/user/{slug}',[UserController::class,'update'])->name('user.update');
    Route::get('/user/softdelete/{slug}',[UserController::class,'softdelete'])->name('user.softdelete');
    Route::get('/user/restore/{slug}',[UserController::class,'restore'])->name('user.restore');
    Route::get('/user/destroy/{slug}',[UserController::class,'destroy'])->name('user.destroy');

//Banner route
    Route::get('/banner',[BannerController::class,'index'])->name('banner.index');
    Route::get('/banner/create',[BannerController::class,'create'])->name('banner.create');
    Route::post('/banner',[BannerController::class,'store'])->name('banner.store');
    Route::get('/banner/show/{slug}',[BannerController::class,'show'])->name('banner.show');
    Route::get('/banner/edit/{banner_id}',[BannerController::class,'edit'])->name('banner.edit');
    Route::put('/banner/{banner_id}',[BannerController::class,'update'])->name('banner.update');
    Route::get('/banner/softdelete/{slug}',[BannerController::class,'softdelete'])->name('banner.softdelete');
    Route::get('/banner/restore/{slug}',[BannerController::class,'restore'])->name('banner.restore');
    Route::get('/banner/destroy/{slug}',[BannerController::class,'destroy'])->name('banner.destroy');

//recycle Route
    Route::get('/recycle/bin/user',[RecycleController::class,'user_index'])->name('recycle.index');
    Route::get('/recycle/user',[RecycleController::class,'user_recycle'])->name('recycle.user');
    Route::get('/recycle/banner',[RecycleController::class,'banner_recycle'])->name('recycle.banner');
    Route::get('/recycle/post',[RecycleController::class,'post_recycle'])->name('recycle.post');
    Route::get('/recycle/category',[RecycleController::class,'category_recycle'])->name('recycle.category');
    Route::get('/recycle/tag',[RecycleController::class,'tag_recycle'])->name('recycle.tag');


//Basic Setting
    Route::get('/basic-setting',[ManageController::class,'basic_index'])->name('manage.basic.index');
    Route::post('/basic-setting',[ManageController::class,'basic_update'])->name('manage.basic.update');

//social media
    Route::get('/social-media',[ManageController::class,'social_index'])->name('social.media.index');
    Route::post('/social-media',[ManageController::class,'social_update'])->name('social.media.update');

//Contact Informaton
    Route::get('/contact-information',[ManageController::class,'contact_index'])->name('contact.index');
    Route::post('/contact-information',[ManageController::class,'contact_update'])->name('contact.update');

      // postController
    Route::get('/post',[PostController::class,'index'])->name('post.index');
    Route::get('/post/create',[PostController::class,'create'])->name('post.create');
    Route::post('/post',[PostController::class,'store'])->name('post.store');
    Route::get('/post/show/{id}',[PostController::class,'show'])->name('post.show');
    Route::get('/post/edite/{id}',[PostController::class,'edit'])->name('post.editing');
    Route::put('/post/{id}',[PostController::class,'update'])->name('post.update');
    Route::get('/post/softdelete/{id}',[PostController::class,'softdelete'])->name('post.softdelete');
    Route::get('/post/restore/{id}',[PostController::class,'restore'])->name('post.restore');
    Route::get('/post/destroy/{id}',[PostController::class,'destroy'])->name('post.destroy');

//postCategory route
    Route::get('/post/catgory',[POstCategoryController::class,'index'])->name('post.category.index');
    Route::get('/post/catgory/create',[POstCategoryController::class,'create'])->name('post.category.create');
    Route::post('/post/catgory',[POstCategoryController::class,'store'])->name('post.category.store');
    Route::get('/post/catgory/show/{slug}',[POstCategoryController::class,'show'])->name('post.category.show');
    Route::get('/post/catgory/edit/{slug}',[POstCategoryController::class,'edit'])->name('post.category.edite');
    Route::put('/post/catgory/{slug}',[POstCategoryController::class,'update'])->name('post.category.update');
    Route::get('/post/catgory/softdelete/{slug}',[POstCategoryController::class,'softdelete'])->name('post.category.softdelete');
    Route::get('/post/catgory/restore/{slug}',[POstCategoryController::class,'restore'])->name('post.category.restore');
    Route::get('/post/catgory/{slug}',[POstCategoryController::class,'destroy'])->name('post.category.delete');

//tagController
    Route::get('/tag',[TagController::class,'index'])->name('tag.index');
    Route::get('/tag/crate',[TagController::class,'create'])->name('tag.create');
    Route::post('/tag',[TagController::class,'store'])->name('tag.store');
    Route::get('/tag/edit/{slug}',[TagController::class,'edit'])->name('tag.edit');
    Route::get('/tag/show/{slug}',[TagController::class,'show'])->name('tag.show');
    Route::put('/tag/{slug}',[TagController::class,'update'])->name('tag.update');
    Route::get('/tag/softdelete/{slug}',[TagController::class,'softelete'])->name('tag.softdelete');
    Route::get('/tag/restore/{slug}',[TagController::class,'restore'])->name('tag.restore');
    Route::get('/tag/destroy/{slug}',[TagController::class,'destroy'])->name('tag.destroy');


require __DIR__.'/auth.php';
