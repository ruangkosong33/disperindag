<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Media\PhotoController;
use App\Http\Controllers\Media\VideoController;
use App\Http\Controllers\AboutUs\TaskController;
use App\Http\Controllers\Article\PostController;
use App\Http\Controllers\Media\BannerController;
use App\Http\Controllers\AboutUs\PolicyController;
use App\Http\Controllers\AboutUs\VisionController;
use App\Http\Controllers\Activity\EventController;
use App\Http\Controllers\AboutUs\HistoryController;
use App\Http\Controllers\AboutUs\ProfileController;
use App\Http\Controllers\Activity\RenstraController;
use App\Http\Controllers\Article\CategoryController;
use App\Http\Controllers\AboutUs\RegulationController;
use App\Http\Controllers\Organization\DivisionController;
use App\Http\Controllers\Organization\EmployeeController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//ABOUT US
Route::resource('/profile', ProfileController::class);
Route::resource('/history', HistoryController::class);
Route::resource('/vision', VisionController::class);
Route::resource('/task', TaskController::class);
Route::resource('/policy', PolicyController::class);
Route::resource('/regulation', RegulationController::class);
//

//ACTIVITY
Route::resource('/event', EventController::class);
Route::resource('/renstra', RenstraController::class);
//

//ORGANIZATION
Route::resource('/division', DivisionController::class);
Route::resource('/employee', EmployeeController::class);
//

//ARTICLE
Route::resource('/category', CategoryController::class);
Route::resource('/post', PostController::class);
//

//MEDIA
Route::resource('/photo', PhotoController::class);
Route::resource('/video', VideoController::class);
Route::resource('/banner', BannerController::class);
//
