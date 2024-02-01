<?php
use App\Http\Controllers\CustomLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



//Route::get('/home', 'user.pages.index')->name('home');
Route::get('/', function (){

   return view('user.pages.index');

})->name('/');

Route::view('/about', 'user.pages.about')->name('about');
Route::view('/contact', 'user.pages.contact')->name('contact');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::post('/contact_submit', [HomeController::class, 'contact_submit'])->name('contact_submit');

Auth::routes();
Route::middleware(['auth'])->group(function () {

    Route::get('profile', function (){  return view('admin.pages.profile');  })->name('profile');
    Route::post('update_profile', [UserController::class, 'update_profile'])->name('update_profile');
    Route::post('update_password', [UserController::class, 'update_password'])->name('update_password');

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    //     ********************************* settings management **********************************
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::post('/update_website_details', [SettingsController::class, 'update_website_details'])->name('update_website_details');
    Route::post('/update_social_links', [SettingsController::class, 'update_social_links'])->name('update_social_links');
    Route::post('/update_images', [SettingsController::class, 'update_about_images'])->name('update_images');


    //************************** PRODUCTS MANAGEMENT********************
    Route::get('/add_products', [SettingsController::class, 'products'])->name('add_products');
    Route::post('/update_product_images', [SettingsController::class, 'update_product_images'])->name('update_product_images');
    Route::post('/update_product_images', [SettingsController::class, 'update_product_images'])->name('update_product_images');
    Route::post('/delete_product_image', [SettingsController::class, 'delete_product_image'])->name('delete_product_image');

});
