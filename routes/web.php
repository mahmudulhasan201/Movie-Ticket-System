<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebHomeController;
use App\Http\Controllers\WebScheduleController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\AdminBookingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WebMovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebHomeController::class, 'home'])->name('frontend.home');
Route::get('/schedule', [WebScheduleController::class, 'schedule'])->name('frontend.schedule');
Route::get('/movie-details/{id}', [WebMovieController::class, 'details'])->name('frontend.movie.details');

Route::get('/booking/form/{id}', [BookingController::class, 'bookingForm'])->name('frontend.booking.form');
Route::post('/booking/store', [BookingController::class, 'bookingStore'])->name('frontend.booking.store');





Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [SessionController::class, 'login'])->name('login');
    Route::post('/do-login', [SessionController::class, 'doLogin'])->name('do.login');

    Route::group(['middleware' => 'auth'], function () {

        Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
        Route::get('/home', [HomeController::class, 'home'])->name('home');
        Route::get('/ticket', [TicketController::class, 'ticket'])->name('ticket');
        Route::get('/actor', [ActorController::class, 'actor'])->name('actor');
        //Route::get('/admin',[AdminController::class,'admin'])->name('admin');
        
    //Category
        Route::get('/category', [CategoryController::class, 'category'])->name('category');
        Route::get('/category_form', [CategoryController::class, 'category_form'])->name('category.form');
        Route::post('/category_store', [CategoryController::class, 'store'])->name('category.store');

        Route::get('/category/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('delete.category');
        Route::get('/category/edit/{id}', [CategoryController::class, 'editCategory'])->name('edit.category');
        Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('update.category');



        // movie
        Route::get('/movie', [MovieController::class, 'movie'])->name('movie.list');
        Route::get('/movie_form', [MovieController::class, 'movie_form'])->name('movie.form');
        Route::post('/store/movie_form', [MovieController::class, 'storeMovie_form'])->name('store.movie.form');

        Route::get('/movie/delete/{id}', [MovieController::class, 'deleteMovie'])->name('movie.delete');
        Route::get('/movie/edit/{id}', [MovieController::class, 'editMovie'])->name('movie.edit');
        Route::put('/movie/update/{id}', [MovieController::class, 'updateMovie'])->name('movie.update');

        //booking
        Route::get('/booking/list', [AdminBookingController::class, 'list'])->name('booking.list');


        
    });
});
