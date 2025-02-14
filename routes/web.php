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
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CatergoryController;

Route::get('/', [HomeController::class,'default']);

Auth::routes();

Route::get('/add-watermark', [ProductController::class, 'addWatermark']);

Route::get('/login/admin',[LoginController::class,'showAdminLoginForm']);
Route::get('/login/creator',[LoginController::class,'showCreatorLoginForm']);
Route::post('/login/admin',[LoginController::class,'adminLogin'])->name('admin.login');
Route::post('/login/creator',[LoginController::class,'creatorLogin'])->name('creator.login');

Route::get('/register/admin',[RegisterController::class,'showAdminRegisterForm']);
Route::get('/register/creator',[RegisterController::class,'showCreatorRegisterForm']);
Route::post('/register/admin',[RegisterController::class,'createAdmin'])->name('admin.register');
Route::post('/register/creator',[RegisterController::class,'createCreator'])->name('creator.register');

Route::get('/', [HomeController::class,'index']);

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

Route::patch('/admin/{id}', [AdminController::class,'archived']);

Route::get('/admin/preview/{id}', [AdminController::class,'preview']);

Route::get('/admin/region/{id}', [AdminController::class,'region']);

Route::get('/admin/earnings', [AdminController::class,'earning']);
Route::get('/admin/portfolio', [AdminController::class,'portfolio']);
Route::get('/admin/insight', [AdminController::class,'insight']);

Route::get('/admin/profile/{id}', [AdminController::class,'profile']);

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

Route::get('/creator/profile/{id}', [CreatorController::class,'profile']);


/*
  |--------------------------------------------------------------------------
  | User File To Be Checkout Route
  |--------------------------------------------------------------------------
*/
Route::get('file/{id}', [ProductController::class, 'file'])->name('file');

Route::get('subscription', [ProductController::class, 'subscription']);
Route::get('commercial', [ProductController::class, 'commercial']);

Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');

Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

/*
  |--------------------------------------------------------------------------
  | User File Catergory Route
  |--------------------------------------------------------------------------
*/
  Route::get( '/catergories/{category}', [CatergoryController::class, 'index'])->name('catergories');

/*
  |--------------------------------------------------------------------------
  | User File Payment Route
  |--------------------------------------------------------------------------
*/

/**Route::post('/payment', [DownloadController::class, 'store']);
Route::get('/payment/{id}', [DownloadController::class,'checkout'])->name('payment');**/

Route::post('/payment', [PaymentController::class, 'store'])->name('payment');
Route::get('/payment/{id}', [PaymentController::class,'checkout'])->name('payment');

/*
  |--------------------------------------------------------------------------
  | User File Download Route
  |--------------------------------------------------------------------------
*/

Route::get('/download/{id}', [DownloadController::class,'checkout'])->name('download');
Route::post('/download', [DownloadController::class, 'store']);


/*
  |--------------------------------------------------------------------------
  | User File Feed Route
  |--------------------------------------------------------------------------
*/
Route::get( '/feed', [FeedController::class, 'post']);
Route::post('/feed', [FeedController::class, 'store']);
Route::post('/feed', [FeedController::class, 'create']);


/*
  |--------------------------------------------------------------------------
  | User Route
  |--------------------------------------------------------------------------
*/

Route::get('/profile', [UserController::class,'profile']);
Route::get('/ai-img-gen', [UserController::class,'ai']);
Route::get('/tester/tilt', [UserController::class,'test']);


