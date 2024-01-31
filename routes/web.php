<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CreatorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FileUploadController;

Route::get('/', [HomeController::class,'default']);

Route::get('/pricing', function () {
    return view('pricing');
});

Auth::routes();

Route::get('/login/admin',[LoginController::class,'showAdminLoginForm']);
Route::get('/login/creator',[LoginController::class,'showCreatorLoginForm']);
Route::post('/login/admin',[LoginController::class,'adminLogin'])->name('admin.login');
Route::post('/login/creator',[LoginController::class,'creatorLogin'])->name('creator.login');

Route::get('/register/admin',[RegisterController::class,'showAdminRegisterForm']);
Route::get('/register/creator',[RegisterController::class,'showCreatorRegisterForm']);
Route::post('/register/admin',[RegisterController::class,'createAdmin'])->name('admin.register');
Route::post('/register/creator',[RegisterController::class,'createCreator'])->name('creator.register');

Route::get('/home', [HomeController::class,'index']);

/*
  |--------------------------------------------------------------------------
  | Log Out
  |--------------------------------------------------------------------------
*/
Route::get('logout', [LoginController::class,'logout']);

/*
  |--------------------------------------------------------------------------
  | Admin Route
  |--------------------------------------------------------------------------
*/

Route::get('/admin', [AdminController::class,'index']);

Route::get('/admin/edit/{id}', [AdminController::class,'edit']);
Route::patch('/admin/{id}', [AdminController::class,'update']);

Route::get('/admin/preview/{id}', [AdminController::class,'files']);

Route::get('/admin/region/{id}', [AdminController::class,'region']);

Route::get('/admin/profile', [AdminController::class,'profile']);

/*
  |--------------------------------------------------------------------------
  | Creator Route
  |--------------------------------------------------------------------------
*/

Route::get('/creator', [CreatorController::class,'index']);

Route::get('/creator/add', [CreatorController::class, 'add']);
Route::post('/creator', [CreatorController::class, 'store'])->name('fileUpload');

Route::get('/creator/edit/{id}', [CreatorController::class,'edit']);
Route::patch('/creator/{id}', [CreatorController::class,'update']);

Route::get('/creator/preview/{id}', [CreatorController::class,'files']);
Route::get('/creator/region/{id}', [CreatorController::class,'region']);

Route::get('/creator/earnings', [CreatorController::class,'earning']);
Route::get('/creator/portfolio', [CreatorController::class,'portfolio']);
Route::get('/creator/insight', [CreatorController::class,'insight']);

Route::get('/creator/profile', [CreatorController::class,'profile']);


/*
  |--------------------------------------------------------------------------
  | User Route
  |--------------------------------------------------------------------------
*/

Route::get('/file/{id}', [HomeController::class,'files']);

Route::get('/proceed', [HomeController::class,'proceeds']);

Route::get('/feed', [HomeController::class, 'feed']);
Route::post('/feed', [HomeController::class, 'store']);
Route::post('/feed', [HomeController::class, 'create']);

Route::get('/profile', [HomeController::class,'profile']);

Route::get('/tester', [HomeController::class,'test']);


