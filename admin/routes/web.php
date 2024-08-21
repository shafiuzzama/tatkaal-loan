<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\TestimonialController;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/route-clear', function() {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');

    return 'Routes cache has been cleared';
});

Route::get('/composer-dump-autoload', function () {
    try {
        Artisan::call('dump-autoload');
        $output = Artisan::output();

        return "Composer dump-autoload has been run successfully.\n" . $output;
    } catch (\Exception $e) {
        return "Error running composer dump-autoload: " . $e->getMessage();
    }
});

Route::get('/migrate', function () {
    Artisan::call('migrate');

    return 'Migrations have been run.';
});

Route::group(['prefix' => '/admin', 'namespace' => 'App\Http\Controllers\Admin'], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('admin.auth')->name('dashboard');
    Route::get('/dashboard/some-route', [DashboardController::class, 'someMethod'])->middleware('admin.auth');

    Route::any('/login', [DashboardController::class, 'login'])->name('login');
    Route::post('/check-user-send-otp', [AuthController::class, 'sendOtp'])->name('send.otp.admin');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/get-chart-record', [DashboardController::class, 'getUserData']);

    Route::get('/addblog', [BlogController::class, 'index'])->name('addblog');
    Route::post('/blogs', [BlogController::class, 'blog_save'])->name('blogs');
    Route::get('/blog-list', [BlogController::class, 'bloglist'])->name('blog_list');
    Route::get('/editBlog/{id}', [BlogController::class, 'editBlog']);
    Route::get('/deleteBlog/{id}', [BlogController::class, 'deleteBlog']);
    Route::post('/update-blog', [BlogController::class, 'updateBlog'])->name('blog_update');

    Route::get('/create-faq', [SettingController::class, 'index'])->name('general_setting');
    Route::post('/settings', [SettingController::class, 'setting_save'])->name('settings');
    Route::get('/faq-list', [SettingController::class, 'settinglist'])->name('setting_list');
    Route::get('/editSetting/{id}', [SettingController::class, 'editSetting']);
    Route::get('/deleteSetting/{id}', [SettingController::class, 'deleteSetting']);
    Route::post('/settings/{id}', [SettingController::class, 'updateSetting'])->name('setting_update');


    Route::prefix('admin')->group(function () {
      Route::get('about', [AboutController::class, 'index'])->name('admin.about.index');
      Route::get('about/create', [AboutController::class, 'create'])->name('admin.about.create');
      Route::post('about', [AboutController::class, 'store'])->name('admin.about.store');
      Route::get('about/{id}/edit', [AboutController::class, 'edit'])->name('admin.about.edit');
      Route::put('about/{id}', [AboutController::class, 'update'])->name('admin.about.update');
      Route::delete('about/{id}', [AboutController::class, 'destroy'])->name('admin.about.destroy');
  });
  

  Route::prefix('admin')->group(function () {
    Route::get('testimonials', [TestimonialController::class, 'index'])->name('admin.testimonials.index');
    Route::get('testimonials/create', [TestimonialController::class, 'create'])->name('admin.testimonials.create');
    Route::post('testimonials', [TestimonialController::class, 'store'])->name('admin.testimonials.store');
    Route::get('testimonials/{id}/edit', [TestimonialController::class, 'edit'])->name('admin.testimonials.edit');
    Route::put('testimonials/{id}', [TestimonialController::class, 'update'])->name('admin.testimonials.update');
    Route::delete('testimonials/{id}', [TestimonialController::class, 'destroy'])->name('admin.testimonials.destroy');
});

Route::get('/customer-list', [ContactController::class, 'customer'])->name('customer_list');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/contact-list', [ContactController::class, 'list'])->name('contact_list');
    Route::get('/contact-view', [ContactController::class, 'view'])->name('contact_view');
    Route::get('/viewContact/{id}', [ContactController::class, 'viewContact']);
    Route::get('/deleteContact/{id}', [ContactController::class, 'deleteContact']);

    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
});
