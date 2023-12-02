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
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\EmailController;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::view('/login', 'auth.login')->name('login');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Dashboard
Route::middleware(['adminMiddleWare'])->group(function () {
    Route::resource('dashboard/users', UserController::class);
    Route::resource('dashboard/admins', AdminController::class);
    Route::resource('dashboard/categories', CategoryController::class);
    Route::resource('dashboard/sellforms', SellFormController::class);
    Route::resource('dashboard/addresses', AddressController::class);
    Route::resource('dashboard/landimages', LandImagesController::class);
    Route::resource('dashboard/landcards', LandCardController::class);
    Route::resource('dashboard/landreservations', LandReservationController::class);
    Route::resource('dashboard/transactions', TransactionController::class);
    Route::get('main/dashboard', [CustomAuthController::class, 'sidebar']);
});


Route::get('/dashboard_login', function () {
    return view('dashboard.dashboard_login');
})->name('dashboard.dashboard_login');

Route::post('welcome/dashboard', [CustomAuthController::class, 'loginUser'])->name('dashlog');
Route::get('dashboard_logout', [CustomAuthController::class, 'logout']);

Route::match(['get', 'post'],'profile/land/{id}',  [LandCardController::class, 'profile_land'])->name('land');
Route::post('/sellforms/{id}/accept', [SellFormController::class,'accept'])->name('sellforms.accept');
Route::post('/landreservation/{id}/deal', [LandReservationController::class,'deal'])->name('landreservations.deal');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Pages Controller
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/singleland/{product}', [PagesController::class, 'singlepage'])->name('singlepage');
Route::get('/category/{category}', [FrontCategoryController::class, 'showLandsByCategory'])->name('category.lands');
//dynamic parameter {category} in the URL.
Route::get( '/sellform', [FrontSellFormController::class, 'create'])->name('sellform');
Route::match(['get', 'post'], '/sellform/store', [FrontSellFormController::class, 'store'])->name('sellform.store');
Route::get( '/reservation', [PagesController::class, 'reservation'])->name('reservation');
Route::match(['get', 'post'],'landreservations/reserveAndRedirect/{id}', [LandReservationController::class, 'reserveAndRedirect'])->name('reserveAndRedirect');
Route::match(['get', 'post'],'/filterlands', [PagesController::class, 'filterlands'])->name('filterlands');
//in line83 is as 85+86
//
//The Route::match method in Laravel allows you to define a route that responds to multiple HTTP methods, such as GET and POST
// using Route::match provides a more concise way to express that the same logic applies to both HTTP methods.
// Route::get('/filterlands', [PagesController::class, 'filterlands'])->name('filterlands');
// Route::post('/filterlands', [PagesController::class, 'filterlands']);
////////////////////////////////////////////////////////////////////////////////////////////////

// google

Route::get('auth/google', [GoogleAuthController::class,'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class,'callbackGoogle']);


////////////////////////////////////////////////////////////////////////////////////////////////
//contact
Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contactus.store');

///////////////////////////////////////////////////////////////////////////////////////////////

Route::post('paypal/payment', [PaypalController::class ,'payment'])->name('paypal');
Route::get('paypal/success', [PaypalController::class ,'success'])->name('paypal_success');
Route::get('paypal/cancel', [PaypalController::class ,'cancel'])->name('paypal_cancel');

///////////////////////////////////////////////////////////////////////////////////////////////
// send email to all users from dashboard

Route::controller(EmailController::class)->group(function () {
    Route::post('send-email-to-all-users', 'sendEmailToAllUsers');
    Route::get('send-email', 'index');
});