<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\SpecialiteController;
use App\Http\Controllers\PathologieController;

  
Route::get('/', function () {
    return view('welcome');
});
  
Auth::routes();
  

Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('patients', PatientController::class);
    Route::resource('medecins', MedecinController::class);
    Route::resource('specialites', SpecialiteController::class);
    Route::resource('pathologies', PathologieController::class);
});
  

Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
  
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});