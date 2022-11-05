<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\Auth\EmailController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Livewire\Admin;
use App\Models\Rules;
use App\Models\Wipes;
use App\Models\WipeTimer;

Route::get('/', function(){
    $timer = WipeTimer::latest()->limit(1)->get();
    $commands = DB::table('rankings')->get();
    $posts = DB::table('posts')->get();
      return view('index',[
          'dates' => $timer,
          'commands'=>$commands,
          'posts'=>$posts
      ]);
})->name('home');

Route::get('/rules', function(){
      $rules = Rules::all();
      return view('rules', [
          'rules'=>$rules
      ]);
})->name('rules');

Route::get('/wipe', function(){
    $wipe = Wipes::get();
    return view('wipe', ['wipes' => $wipe]);
})->name('wipe');

// Route::get('/gallery', function(){
//     return view('profile.gallery');
// })->name('gallery');

Route::middleware('guest')->group(function (){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/signup', [SignupController::class, 'index'])->name('signup');
});

Route::middleware(['auth', 'isAdmin'])->prefix('admin')->group(function (){
    Route::get('/admin', Admin::class)->name('admin');
    Route::post('/wipeTimer', [AdminController::class, 'storeTimer'])->name('wipeTimer');
    Route::post('/post', [AdminController::class, 'storePost'])->name('storePost');
    Route::post('/wipes/store', [AdminController::class, 'storeWipes'])->name('storeWipes');
    Route::delete('/wipes/delete/{id}', [AdminController::class, 'wipeDelete'])->name('wipeDelete');
    Route::post('/wipes/status/{id}', [AdminController::class, 'wipeStatus'])->name('wipeStatus');
    Route::post('/rule', [AdminController::class, 'storeRule'])->name('storeRule');
    Route::delete('/rule/delete/{id}', [AdminController::class, 'deleteRule'])->name('deleteRule');
    Route::post('/ranking/store', [AdminController::class, 'storeRanking'])->name('storeRanking');
    Route::delete('/ranking/delete/{id}', [AdminController::class, 'deleteRanking'])->name('deleteRanking');
});

Route::post('/login', [LoginController::class, 'store']);
Route::post('/signup', [SignupController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware(['auth', 'verified']);

Route::get('/email/verify', [EmailController::class, 'index'])
    ->middleware(['auth', 'isVerified'])->name('verification.notice');
Route::post('/email/verification-notification', [EmailController::class, 'verify'])
    ->middleware(['auth', 'throttle:6,1'])->name('verification.send');
Route::get('/email/verify/{id}/{hash}', [EmailController::class, 'email'])
    ->middleware(['auth', 'signed'])->name('verification.verify');


Route::middleware(['guest'])->group(function (){
      Route::get('/forgot-password', [PasswordController::class, 'password'])->name('password.request');
      Route::get('/reset-password/{token}', [PasswordController::class, 'index'])->name('password.reset');
      Route::post('/forgot-password', [PasswordController::class, 'email'])->name('password.email');
      Route::post('/reset-password', [PasswordController::class, 'reset'])->name('password.update');
});