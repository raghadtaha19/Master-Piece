<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SellFormController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\LandImagesController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\FrontCategoryController;
use App\Http\Controllers\LandCardController;
use App\Http\Controllers\LandReservationController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\FrontSellFormController;



//Dashboard

Route::resource('dashboard/users', UserController::class)->middleware('adminMiddleWare');
Route::resource('dashboard/admins', AdminController::class)->middleware('adminMiddleWare');
Route::resource('dashboard/categories', CategoryController::class)->middleware('adminMiddleWare');
Route::resource('dashboard/sellforms', SellFormController::class)->middleware('adminMiddleWare');
Route::resource('dashboard/addresses', AddressController::class)->middleware('adminMiddleWare');
Route::resource('dashboard/landimages', LandImagesController::class)->middleware('adminMiddleWare');
Route::resource('dashboard/landcards', LandCardController::class)->middleware('adminMiddleWare');
Route::resource('dashboard/landreservations', LandReservationController::class)->middleware('adminMiddleWare');
Route::resource('dashboard/transactions', TransactionController::class)->middleware('adminMiddleWare');

Route::get('/dashboard_login', function () {
    return view('dashboard.dashboard_login');
})->name('dashboard.dashboard_login');

Route::post('welcome/dashboard', [CustomAuthController::class, 'loginUser'])->name('dashlog');
Route::get('main/dashboard', [CustomAuthController::class, 'sidebar'])->middleware('adminMiddleWare');
Route::get('dashboard_logout', [CustomAuthController::class, 'logout']);



// Route::post('welcome/dashboard', [CustomAuthController::class, 'loginUser'])->name('dashlog');


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




//Pages Controller
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/SingleLand/{product}', [PagesController::class, 'singlepage'])->name('singlepage');
Route::get('/category/{category}', [FrontCategoryController::class, 'showLandsByCategory'])->name('category.lands');
Route::get( '/sellform', [FrontSellFormController::class, 'create'])->name('sellform');
Route::match(['get', 'post'], '/sellform/store', [FrontSellFormController::class, 'store'])->name('sellform.store');











