<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BannerController;
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


//admin route
Route::group(['prefix' => 'admin','middleware' => ['auth']], function(){
    Route::get('/',[AdminController::class,'index'])->name('admin.index');

});

//user route
    Route::get('/user',[UserController::class,'index'])->name('user.index');
    Route::get('/user/create',[UserController::class,'create'])->name('user.create');
    Route::post('/user',[UserController::class,'store'])->name('user.store');
    Route::get('/user/show/{slug}',[UserController::class,'show'])->name('user.show');
    Route::get('user/edite/{slug}',[UserController::class,'edit'])->name('user.edit');
    Route::put('/user/{slug}',[UserController::class,'update'])->name('user.update');
    Route::get('/user/softdelete/{slug}',[UserController::class,'softdelete'])->name('user.softdelete');
    Route::delete('/user/{slug}',[UserController::class,'delete'])->name('user.delete');

//Banner route
    Route::get('/banner',[BannerController::class,'index'])->name('banner.index');
    Route::get('/banner/create',[BannerController::class,'create'])->name('banner.create');
    Route::post('/banner',[BannerController::class,'store'])->name('banner.store');
    Route::get('/banner/show/{slug}',[BannerController::class,'show'])->name('banner.show');
    Route::get('/banner/edit/{slug}',[BannerController::class,'edit'])->name('banner.edit');
    Route::put('/banner/{slug}',[BannerController::class,'update'])->name('banner.update');
    Route::get('/banner/softdelete/{slug}',[BannerController::class,'softdelete'])->name('banner.softdelete');
    Route::delete('/banner/{slug}',[BannerController::class,'destroy'])->name('banner.delete');







require __DIR__.'/auth.php';
