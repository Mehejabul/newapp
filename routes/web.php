<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
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





require __DIR__.'/auth.php';
