<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

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

// front
Route::get('/front',[HomeController::class,'index']);

// admin
Route::get('/dashboard',[DashBoardController::class,'index']);
Route::resource('categories',CategoryController::class);
Route::resource('team',TeamController::class);
Route::resource('about',AboutController::class);
Route::resource('section',SectionController::class);
Route::resource('product',ProductController::class);
Route::resource('review',ReviewController::class);
Route::resource('event',EventController::class);
Route::resource('gallery',GalleryController::class);
// فاضل contact us
?>
