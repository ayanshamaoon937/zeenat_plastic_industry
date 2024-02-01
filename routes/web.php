<?php
use App\Http\Controllers\CustomLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



//Route::get('/home', 'user.pages.index')->name('home');
Route::get('/', function (){

   return view('user.pages.index');

})->name('/');

Route::view('/about', 'user.pages.about')->name('about');
Route::view('/contact', 'user.pages.contact')->name('contact');
Route::view('/products', 'user.pages.products')->name('products');

Auth::routes();
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/profile', [HomeController::class, 'index'])->name('profile');

    //     ********************************* settings management **********************************
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::post('/update_website_details', [SettingsController::class, 'update_website_details'])->name('update_website_details');
    Route::post('/update_social_links', [SettingsController::class, 'update_social_links'])->name('update_social_links');
    Route::post('/update_images', [SettingsController::class, 'update_about_images'])->name('update_images');


    //************************** PRODUCTS MANAGEMENT********************
    Route::get('/products', [SettingsController::class, 'products'])->name('products');
    Route::post('/update_product_images', [SettingsController::class, 'update_product_images'])->name('update_product_images');
    Route::post('/update_product_images', [SettingsController::class, 'update_product_images'])->name('update_product_images');
    Route::post('/delete_product_image', [SettingsController::class, 'delete_product_image'])->name('delete_product_image');

});
