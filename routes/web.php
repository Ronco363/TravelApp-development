<?php

use Illuminate\Support\Facades\Route;
//per correggere AUTH
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanController; 
use App\Http\Controllers\StripeController;
use App\Http\Controllers\TripController;
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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/escursionismo', function () {
    return view('escursionismo');
});

Route::get('/ciclismo', function () {
    return view('ciclismo');
});

Route::get('/passeggiata', function () {
    return view('passeggiata');
});

// admin


Route::middleware(['auth', 'isAdmin'])->group(function() {
    Route::get('/dashboard', [TripController::class, 'dashboard']);
    Route::post('/store', [TripController::class, 'store'])->name('store');
    Route::get('/fetchall', [TripController::class, 'fetchAll'])->name('fetchAll');
    Route::delete('/delete', [TripController::class, 'delete'])->name('delete');
    Route::get('/edit', [TripController::class, 'edit'])->name('edit');
    Route::post('/update', [TripController::class, 'update'])->name('update');
});

//homepage route

Route::get('/homepage', function () {
    return view('homepage');
});


Auth::routes();

//home                  HOMECONTROLLER
Route::get('/home', [HomeController::class, 'index'])->name('home');

//Gestione Apertura, Successo e Cancellazione del checkout
Route::post('/session', [StripeController::class, 'session'])->name('session');
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');

//Gestione parte shop
Route::get('shop', [PlanController::class,'index'])->name('shop'); 
Route::get('cart', [PlanController::class, 'cart'])->name('cart');
Route::get('add_to_cart/{id}', [PlanController::class,'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [PlanController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [PlanController::class, 'remove'])->name('remove_from_cart');


// Marco

