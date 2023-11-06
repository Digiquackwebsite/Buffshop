<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\Auth\VendorController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth', 'user'])->group(function () {
//     // User routes here
// });

// Route::middleware(['auth', 'admin'])->group(function () {
//     // Admin routes here
// });




Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/storeregister', [LoginController::class, 'store'])->name('storeregister');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');



Route::get('/vendors', [HomeController::class, 'vendors'])->name('vendors');
Route::post('/vstore', [HomeController::class, 'vstore'])->name('vstore');
Route::get('/vendors/{Id}/edit', [HomeController::class, 'edit'])->name('vendors.edit');

// Update item
Route::put('/vendors/{Id}', [HomeController::class, 'update'])->name('vendors.update');
Route::get('/close-form', [HomeController::class, 'close'])->name('closeForm');

// Delete item
Route::delete('/vendors/{Id}', [HomeController::class, 'destroy'])->name('vendors.destroy');






//  warranty card and customer form and page strt
Route::get('/warrantycards', [HomeController::class, 'warrantycards'])->name('warrantycards'); 
// Route::get('/warrantyform', [HomeController::class, 'warrantyform'])->name('warrantyform'); 
Route::post('/wstore', [HomeController::class, 'wstore'])->name('wstore');
//  download pdf link on 25 oct 2023 strt
Route::get('/pdf-warrenty-card/{id}', [HomeController::class, 'viewPdf'])->name('viewPdf');
//  download pdf link on 25 oct 2023 end




Route::get('/customerdata', [HomeController::class, 'customerdata'])->name('customerdata'); 
Route::get('/customerform', [HomeController::class, 'customerform'])->name('customerform'); 
Route::post('/cstore', [HomeController::class, 'cstore'])->name('cstore');


//  warranty card and customer form and page end  cstore


Route::get('forget-password', [ForgotPasswordController::class, 'ForgetPassword'])->name('ForgetPasswordGet');
Route::post('forget-password', [ForgotPasswordController::class, 'ForgetPasswordStore'])->name('ForgetPasswordPost');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'ResetPassword'])->name('ResetPasswordGet');
Route::post('reset-password', [ForgotPasswordController::class, 'ResetPasswordStore'])->name('ResetPasswordPost');



// Route::get('/get-brach-code',[HomeController::class, 'getBrachCode'] );
  
Route::get('file-upload', [FileUploadController::class, 'index']);
Route::post('store', [FileUploadController::class, 'store']);



// pdf structure strt
Route::get('document', [HomeController::class, 'document']);

Route::get('termcondition', [HomeController::class, 'termcondition']);
// pdf structure end


// vendor login crendiatls 3 nov 2023 strt

Route::get('/vendor/login', [VendorController::class, 'vendorlogin'])->name('vendor.login');
Route::get('/vendor/dashboard', [VendorController::class, 'vendordashboard'])->name('vendor.dashboard');
Route::get('/vendor/customerdata', [VendorController::class, 'vendorcustomerdata'])->name('vendor.customerdata');
Route::get('/vendor/warrantycards', [VendorController::class, 'vendorwarrantycards'])->name('vendor.warrantycards');
Route::get('/vendor/logout', [VendorController::class, 'vendorlogout'])->name('vendor.logout');
Route::post('/vendor/logout', [VendorController::class, 'vendorlogout'])->name('vendor.logout');

// vendor login crendiatls 3 nov 2023 end 
