<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;




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

Route::get('/', function(){
    echo "Welcome to HomePage Website Educastudio";
});
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function(){
        echo "Halaman edu games";
    });
    Route::get('/marbel-and-friends-kids-games', function(){
        echo "Halaman kids games";
    });
    Route::get('/riri-story-books', function(){
        echo "Halaman riri story books";
    });
    Route::get('/kolak-kids-songs', function(){
        echo "Halaman kolak kids song";
    });
});
Route::get('/news/{name?}', function ($name=null){
    echo "latest news about Crime $name";
});
Route::prefix('program')->group(function (){
    Route::get('/karir', function (){
        echo "Halaman program karir di EducaStudio";
    });
    Route::get('/magang', function (){
        echo "Halaman magang di EducaStudio";
    });
    Route::get('/kunjungan-industri', function (){
        echo "Halaman kunjungan industri di EducaStudio";
    });
});
Route::get('home/about-us', function(){
    echo "About-us";
})->name('about-us');
Route::resource('contact-us',  ContactController::class)->only([
    'index'
]);
 



