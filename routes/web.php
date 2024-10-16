<?php

use App\Http\Controllers\Frontend\WebHomeController;
use App\Http\Controllers\Frontend\WebBookingController;
use App\Http\Controllers\Frontend\WebMovieController;
use App\Http\Controllers\Frontend\WebCategoryController;
use App\Http\Controllers\Frontend\WebSessionController;

use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\MovieController;
use App\Http\Controllers\Backend\SessionController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\CategoryController;
use Illuminate\Support\Facades\Route;


//Frontend
Route::get('/', [WebHomeController::class, 'home'])->name('frontend.home');

Route::get('/registration', [WebSessionController::class, 'registration'])->name('frontend.registration');
Route::post('/do-registration', [WebSessionController::class, 'doRegistration'])->name('frontend.do.registration');

Route::get('/login', [WebSessionController::class, 'login'])->name('frontend.login');
Route::post('/do-login', [WebSessionController::class, 'doLogin'])->name('frontend.do.login');

Route::get('/single/movie-details/{id}', [WebMovieController::class, 'details'])->name('frontend.movie.details');

Route::get('/category/movie-details/{id}', [WebCategoryController::class, 'categoryMovie'])->name('frontend.category.movie.details');

Route::get('/all/movies', [WebCategoryController::class, 'allMovie'])->name('frontend.movies');

Route::get('/contact', [WebCategoryController::class, 'contact'])->name('frontend.contact');

Route::group(['middleware' => 'customerAuth'], function () {

    Route::get('/logout', [WebSessionController::class, 'logout'])->name('frontend.logout');
    Route::get('/booking/form/{id}', [WebBookingController::class, 'bookingForm'])->name('frontend.booking.form');
    Route::post('/booking/store', [WebBookingController::class, 'bookingStore'])->name('frontend.booking.store');
});

//Backend
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [SessionController::class, 'login'])->name('login');
    Route::post('/do-login', [SessionController::class, 'doLogin'])->name('do.login');

    Route::group(['middleware' => 'auth'], function () {

        Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
        Route::get('/home', [HomeController::class, 'home'])->name('home');

        //Category
        Route::get('/category', [CategoryController::class, 'category'])->name('category');
        Route::get('/category_form', [CategoryController::class, 'category_form'])->name('category.form');
        Route::post('/category_store', [CategoryController::class, 'store'])->name('category.store');

        Route::get('/category/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('delete.category');
        Route::get('/category/edit/{id}', [CategoryController::class, 'editCategory'])->name('edit.category');
        Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('update.category');

        //Movie
        Route::get('/movie', [MovieController::class, 'movie'])->name('movie.list');
        Route::get('/movie_form', [MovieController::class, 'movie_form'])->name('movie.form');
        Route::post('/store/movie_form', [MovieController::class, 'storeMovie_form'])->name('store.movie.form');

        Route::get('/movie/delete/{id}', [MovieController::class, 'deleteMovie'])->name('movie.delete');
        Route::get('/movie/edit/{id}', [MovieController::class, 'editMovie'])->name('movie.edit');
        Route::put('/movie/update/{id}', [MovieController::class, 'updateMovie'])->name('movie.update');

        //Booking
        Route::get('/booking/list', [BookingController::class, 'list'])->name('booking.list');
    });
});
