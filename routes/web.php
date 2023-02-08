<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BookController as AdminBookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Front\AboutController as FrontAboutController;
use App\Http\Controllers\Front\BookController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\MenuController;
use App\Http\Controllers\Front\TeamController as FrontTeamController;
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
Route::get('/',[HomeController::class,'index']);
Route::get('/about-us',[FrontAboutController::class,'index']);
Route::get('/menu',[MenuController::class,'index']);
Route::get('/our-team',[FrontTeamController::class,'index']);
Route::post('/book-table',[BookController::class,'store'])->name('book');
Route::controller(ContactController::class)->group(function(){
    Route::get('contact-us','index');
    Route::post('contact-us-send','store')->name('contact-us-send');

});
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
Route::controller(AdminContactController::class)->group(function(){
    Route::get('/show-messages','index');
    Route::delete('/message-destroy/{id}','destroy')->name('message');
}
);
Route::controller(AdminBookController::class)->group(function(){
    Route::get('/show-tables','index');
    Route::delete('/table-destroy/{id}','destroy')->name('table');
}
);
?>
