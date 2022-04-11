<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('user')->name('user.')->group(function(){
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.user.login')->name('login');
        Route::view('/register','dashboard.user.register')->name('register');
        Route::post('/create',[UserController::class,'create'])->name('create');
        Route::post('/check',[UserController::class,'check'])->name('check');
  });

  Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.user.home')->name('home');
        Route::post('/logout',[UserController::class,'logout'])->name('logout');
        Route::get('/add-new',[UserController::class,'add'])->name('add');
  });
});

Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.admin.home')->name('home');
        Route::view('/dashboard','dashboard.admin.dashboard')->name('dashboard');
        //dashboard add category
        Route::get('/addcategory',[AdminController::class,'addcategory'])->name('addcategory');
        Route::post('/store_category',[AdminController::class,'store_category'])->name('store_category');
        Route::post('/addcategory/{category}/update_category',[AdminController::class,'update'])->name('update_category');
        Route::get('/addcategory/{category}/delete_category',[AdminController::class,'delete'])->name('delete_category');
        //dashboard add jobs
        //Route::get('/addjob',[AdminController::class,'addjob'])->name('addjob');
        // Route::post('/store_job',[AdminController::class,'store_job'])->name('store_job');
        // Route::post('/addjob/{job}/update_job',[AdminController::class,'updatejob'])->name('update_job');
        // Route::get('/addjob/{job}/delete_job',[AdminController::class,'deletejob'])->name('delete_job');
        Route::get('/showjobbycat/{category}',[AdminController::class,'showjobbycat'])->name('showjobbycat');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
    });

});

