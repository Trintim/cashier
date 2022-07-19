<?php

use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\LocaleController;
use App\Http\Controllers\Web\LogController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\UserController;
use App\Http\Controllers\Web\ClientController;
use App\Http\Controllers\Web\ClientDashboardController;
use App\Http\Controllers\Web\SistemaController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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
Route::get('/', [SistemaController::class, 'index'])->name('usuario');

Route::get('/cadastro', [SistemaController::class, 'cadastro'])->name('cadastro');

Route::middleware('locale')->group(function () {

    //Change system language route
    Route::put('/locale', [LocaleController::class, 'setLocale'])->name('locale');

    Auth::routes();

    Route::middleware('auth')->group(function () {

        //Email verification routes
        Route::get('/email/verify', [ClientDashboardController::class, 'verify'])->name('verification.notice');

        Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
            $request->fulfill();
            return redirect('/');
        })->middleware('signed')->name('verification.verify');

        Route::post('/email/verification-notification', function (Request $request) {
            $request->user()->sendEmailVerificationNotification();

            return back()->with('message', 'Verification link sent!');
        })->middleware('throttle:6,1')->name('verification.send');

        //Cliente Logado
        Route::middleware(['ClientAcess', 'verified'])->prefix('cliente')->group(function () {
            Route::get('/', [ClientDashboardController::class, 'index'])->name('logado');
        });

        Route::middleware('AdminAcess', 'verified')->prefix('/admin')->group(function (){
            //Dashboard routes
            Route::any('dashboard', [DashboardController::class, 'index'])->name('dashboard');
            //Client routes
            Route::resource('client', ClientController::class);


            //User profile routes
            Route::controller(ProfileController::class)->name('profile.')->group(function () {
                Route::get('profile', 'edit')->name('edit');
                Route::put('profile', 'update')->name('update');
                Route::put('profile/password', 'password')->name('password');
            });

            Route::middleware('IsAdmin')->group(function () {
                //Log routes
                Route::any('log', [LogController::class, 'index'])->name('log.index');

                //User CRUD routes
                Route::resource('user', UserController::class);
                //Client CRUD routes
                Route::resource('client', ClientController::class);
            });
        });
    });
});
Route::post('/publicStore', [ClientController::class, 'publicStore'])->name('publicStore');
