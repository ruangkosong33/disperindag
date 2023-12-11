<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Media\PhotoController;
use App\Http\Controllers\Media\VideoController;
use App\Http\Controllers\AboutUs\TaskController;
use App\Http\Controllers\Activity\IkuController;
use App\Http\Controllers\Article\InfoController;
use App\Http\Controllers\Article\PostController;
use App\Http\Controllers\Media\BannerController;
use App\Http\Controllers\AboutUs\PolicyController;
use App\Http\Controllers\AboutUs\VisionController;
use App\Http\Controllers\AboutUs\HistoryController;
use App\Http\Controllers\AboutUs\ProfileController;
use App\Http\Controllers\Activity\FileIkuController;
use App\Http\Controllers\Activity\RenstraController;
use App\Http\Controllers\Article\CategoryController;
use App\Http\Controllers\Information\EventController;
use App\Http\Controllers\AboutUs\RegulationController;
use App\Http\Controllers\Activity\FileRenstraController;
use App\Http\Controllers\Information\CommodityController;
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
Route::resource('/renstra', RenstraController::class);
Route::get('/filerenstra/{renstra}', [FileRenstraController::class, 'index'])->name('filerenstra.index');
Route::get('/filerenstra/create/{renstra}', [FileRenstraController::class, 'create'])->name('filerenstra.create');
Route::post('/filerenstra/{renstra}', [FileRenstraController::class, 'store'])->name('filerenstra.store');
Route::get('/filerenstra/{renstra}/edit/{filerenstra}', [FileRenstraController::class, 'edit'])->name('filerenstra.edit');
Route::put('/filerenstra/{renstra}/{filerenstra}', [FileRenstraController::class, 'update'])->name('filerenstra.update');
Route::delete('/filerenstra/{renstra}/{filerenstra}', [FileRenstraController::class , 'destroy'])->name('filerenstra.destroy');

Route::resource('/iku', IkuController::class);
Route::get('/fileiku/{iku}', [FileIkuController::class, 'index'])->name('fileiku.index');
Route::get('/fileiku/create/{iku}', [FileIkuController::class, 'create'])->name('fileiku.create');
Route::post('/fileiku/{iku}', [FileIkuController::class, 'store'])->name('fileiku.store');
Route::get('/fileiku/{iku}/edit/{fileiku}', [FileIkuController::class, 'edit'])->name('fileiku.edit');
Route::put('/fileiku/{iku}/{fileiku}', [FileIkuController::class, 'update'])->name('fileiku.update');
Route::delete('/fileiku/{iku}/{fileiku}', [FileIkuController::class, 'destroy'])->name('fileiku.destroy');
//

//ORGANIZATION
Route::resource('/division', DivisionController::class);
Route::resource('/employee', EmployeeController::class);
//

//ARTICLE
Route::resource('/category', CategoryController::class);
Route::resource('/post', PostController::class);
Route::resource('/info', InfoController::class);
//

//MEDIA
Route::resource('/photo', PhotoController::class);
Route::resource('/video', VideoController::class);
Route::resource('/banner', BannerController::class);
//

//INFORMATION
Route::resource('/event', EventController::class);
Route::resource('/commodity', CommodityController::class);
//

