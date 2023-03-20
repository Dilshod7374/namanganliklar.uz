<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexContentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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
Route::get('/lang/{lang}', function ($lang) {
    session(['lang' => $lang]);
    return back();
}
);
    
Route::get('/',[PageController::class, 'index']);
Route::get('/contact',[PageController::class, 'contact'])->name('contact');
Route::get('/posts/{id}',[PageController::class, 'posts'])->name('post');
Route::get('/article/{id}',[PageController::class, 'article'])->name('article');


Route::prefix('admin/')->name('admin.')->middleware(['auth'])->group(function(){

    Route::get('/home', function(){
        return view('admin.layouts.layout');
    });

    Route::resource('/category', CategoryController::class );
    Route::resource('/posts', PostController::class );
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
