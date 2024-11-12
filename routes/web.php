<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;


Route::get('/',[HomeController::class,'index'])->name('home');
//Route::get('/details/{id}/{slug}',[HomeController::class,'details'])->name('details');
Route::get('/details/{slug}',[HomeController::class,'details'])->name('details');

Route::get('/signup',[VisitorController::class,'signUpForm'])->name('sign.up');
Route::post('/signup',[VisitorController::class,'signUp'])->name('sign.up');
Route::get('/signin',[VisitorController::class,'signInForm'])->name('sign.in');
Route::post('/signin',[VisitorController::class,'signIn'])->name('sign.in');
Route::get('/signout',[VisitorController::class,'signOut'])->name('sign.out');
Route::post('/comment',[CommentController::class,'newComment'])->name('comment');

Route::get('/news',[ContactController::class,'news'])->name('news');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::get('/features',[ContactController::class,'features'])->name('features');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
    Route::get('/add/category',[CategoryController::class, 'index'])->name('add.category');
    Route::get('/manage/category',[CategoryController::class, 'manageCategory'])->name('manage.category');
    Route::post('/new/category',[CategoryController::class, 'store'])->name('new.category');
    Route::get('/status/{id}',[CategoryController::class, 'status'])->name('status');
    Route::post('/delete/category/{id}',[CategoryController::class, 'destroy'])->name('delete.category');
    Route::get('/edit/category/{id}',[CategoryController::class, 'editCategory'])->name('edit.category');
    Route::post('/update/category/{id}',[CategoryController::class, 'updateCategory'])->name('update.category');


    Route::resources(['blogs'=>BlogController::class]);

});
