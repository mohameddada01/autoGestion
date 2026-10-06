<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatiqueController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployesController;
use App\Http\Controllers\LoginController;



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
/*  testing part of the App  (homepage ,contact , about .....)  */ 
Route::get('/ajouter', [StatiqueController::class,'ajouter'])->name('ajouter');
Route::post('/create', [StatiqueController::class,'create'])->name('create');










/*  Statique part of the App  (homepage ,contact , about .....)  */ 
Route::get('/', [StatiqueController::class,'Homepage'])->name('homepage');
Route::get('/about', [StatiqueController::class,'About'])->name('about');
Route::get('/contact', [StatiqueController::class,'Contact'])->name('contact');
Route::get('/tracking', [StatiqueController::class,'Tracking'])->name('Tracking');



/*  Login part of the App  */ 
Route::get('/login', [LoginController::class,'login'])->name('login.show');
Route::post('/loginstore', [LoginController::class,'LoginStore'])->name('login.loginstore');
Route::get('/logout', [LoginController::class,'logout'])->name('login.logout');





Route::middleware(['auth', 'role:admin'])->group(function () {
/*  Admin part of the App    */ 
Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');

Route::get('/factures/{id}/pdf', [AdminController::class, 'generatePDF'])->name('factures.pdf');


     /* Stock-Management for Admin part of the App    */ 
 Route::get('/admin/stock',[AdminController::class,'Stock'])->name('admin.stock');
 Route::get('/admin/create_item',[AdminController::class,'create_item'])->name('admin.create_item');
 Route::post('/admin/store_item',[AdminController::class,'store_item'])->name('admin.store_item');
 Route::delete('/admin/destroy_item/{id}',[AdminController::class,'destroy_item'])->name('admin.destroy_item');
 Route::get('/admin/edit_item/{id}',[AdminController::class,'edit_item'])->name('admin.edit_item');
 Route::put('/admin/update_item/{Stocks}',[AdminController::class,'update_item'])->name('admin.update_item');

 Route::get('/admin/alert_item',[AdminController::class,'alert_item'])->name('admin.alert_item');
 Route::put('/admin/update_Stock_alert/{id}',[AdminController::class,'update_Stock_alert'])->name('admin.update_Stock_alert');






 Route::post('/admin/store_category',[AdminController::class,'store_category'])->name('admin.store_category');








     /* Employees-Management for Admin part of the App    */ 
 Route::get('/admin/employes',[AdminController::class,'employes'])->name('admin.employes');
 Route::get('/admin/create_employee',[AdminController::class,'create_emplye'])->name('admin.create_employe');
 Route::post('/admin/store_employee',[AdminController::class,'store_emplye'])->name('admin.store_employe');
 Route::get('/admin/edit_employee/{id}',[AdminController::class,'edit_employe'])->name('admin.edit_employe');
 Route::put('/admin/update_employee/{autorepair_users}',[AdminController::class,'update_employe'])->name('admin.update_employe');
 Route::delete('/admin/destroy_employee/{id}',[AdminController::class,'destroy_employe'])->name('admin.destroy_employe');












     /* Appointmen-Management for Admin part of the App    */ 
 Route::get('/admin/appointment',[AdminController::class,'appointment'])->name('admin.appointment');
    Route::get('/admin/create_appointment',[AdminController::class,'create_appointment'])->name('admin.create_appointment');
    Route::post('/admin/store_appointment',[AdminController::class,'store_appointment'])->name('admin.store_appointment');





});





















Route::middleware(['auth', 'role:employee'])->group(function () {
    // Employee-only routes

/*  Employes part of the App    */ 
Route::get('/employe/dashboard',[EmployesController::class,'dashboard'])->name('employe.dashboard');
Route::get('/employe/task/{repairs}',[EmployesController::class,'task'])->name('employe.task');
Route::get('/employe/facturation/{id}',[EmployesController::class,'facturation'])->name('employe.facturation');
Route::post('/employe/store_facture',[EmployesController::class,'store_facture'])->name('employe.store_facture');


});










