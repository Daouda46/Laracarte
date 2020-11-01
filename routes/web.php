<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactsController;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Route;



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

// Route::get('/',[PagesController::class, 'home'])->name('home');
Route::view('/','pages.home')->name('home');

// Lien pour le test d email
Route::get('/test-email',function(){
    return new ContactMessage("DAOUDA", "ouattara.daouda@gmail.com", "Merci pour Laracarte");
});


Route::get('/about',[PagesController::class, 'about'])->name('about');
// Route::view('/about','pages/about')->name('about');

Route::get('/contact',[ContactsController::class, 'create'])->name('contact');

Route::post('/contact',[ContactsController::class, 'store'])->name('contact');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
