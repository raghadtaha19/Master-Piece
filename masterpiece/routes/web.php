<?php

use App\Http\Controllers\ProfileController;
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
Route::view('/login', 'auth.login')->name('login');

Route::get('/', function () {
    return view('welcome');
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


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Pages Controller
Route::get('/home', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
// Route::get('/register', [PagesController::class, 'register'])->name('register');
// Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::get('/singleland/{product}', [PagesController::class, 'singlepage'])->name('singlepage');
Route::get('/category/{category}', [FrontCategoryController::class, 'showLandsByCategory'])->name('category.lands');
Route::get( '/sellform', [FrontSellFormController::class, 'create'])->name('sellform');
Route::match(['get', 'post'], '/sellform/store', [FrontSellFormController::class, 'store'])->name('sellform.store');
Route::get( '/reservation', [PagesController::class, 'reservation'])->name('reservation');
Route::get('/filterlands', [PagesController::class, 'filterlands'])->name('filterlands');