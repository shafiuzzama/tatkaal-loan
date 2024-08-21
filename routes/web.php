<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    BlogController,
    ContactFormController,
    LoanApplicationController,
    Auth\RegisterController,
    Auth\LoginController
};

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


// Route::get('/', function () {
//     return view('front/index');
// });

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('About-us',[HomeController::class,'about'])->name('about');

Route::post('/loan-applications', [LoanApplicationController::class, 'store'])->name('loan_applications');

// Handle login form submission
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Contact
Route::get('Contact-us',[ContactFormController::class,'contact'])->name('contact');
Route::post('/submit-form', [ContactFormController::class, 'store'])->name('form.submit');


//Web Urls
Route::get('faq',[HomeController::class,'faq'])->name('faq');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/terms-conditions', [HomeController::class, 'terms'])->name('terms');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blog.details');