<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserController;

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

Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);  // redirect to google login
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);    // callback route after google account chosen

Route::get('/register', [UsersController::class,'register']);
Route::get('/ForgotPassword', [UsersController::class,'ForgotPassword']);
Route::get('/index', [UsersController::class,'index'])->name('index');

Route::post('/register', [UsersController::class, 'store']);
Route::post('/index', [UsersController::class, 'signin']);

Route::post('/Logout', [UsersController::class, 'logout'])->name('logout');

// Group protected routes
Route::group(['middleware' => ['auth', 'noBrowserCache']], function() {
    Route::get('/homepage', [NavController::class,'homepage'])->name('homepage');
    Route::get('/About', [NavController::class,'About'])->name('About');
    Route::get('/Help', [NavController::class,'Help'])->name('Help');

    Route::get('/EditAccount', [UsersController::class,'EditAccount'])->name('EditAccount');
    Route::get('/ViewAccount', [UsersController::class,'ViewAccount'])->name('ViewAccount');

    Route::post('/EditAccount', [UsersController::class, 'update'])->name('update');

    Route::get('/EditTransaction/{id}', [TransactionsController::class,'EditTransaction']);
    Route::get('/NewTransaction', [TransactionsController::class,'NewTransaction'])->name('NewTransaction');
    Route::get('/PreviousTransaction', [TransactionsController::class,'PreviousTransaction'])->name('PreviousTransaction');

    Route::post('/NewTransaction', [TransactionsController::class,'store']);
    Route::get('/EditTransaction/{invoice_number}', [TransactionsController::class, 'edit']);
    Route::put('/EditTransaction/{invoice_number}', [TransactionsController::class, 'update']);
    Route::get('/DeleteTransaction/{invoice_number}', [TransactionsController::class, 'DeleteTransaction']);
    Route::delete('/DeleteTransaction/{invoice_number}', [TransactionsController::class, 'destroy']);
});