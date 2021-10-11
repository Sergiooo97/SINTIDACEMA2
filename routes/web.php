<?php

use Illuminate\Support\Facades\Route;
use App\Exports\materialesG;
use Maatwebsite\Excel\Facades\Excel;
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
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/perfil', [App\Http\Controllers\adminController::class, 'index'])->name('admin.perfil');
Route::patch('/perfil/img', [App\Http\Controllers\adminController::class, 'img'])->name('img.perfil');
Route::patch('/perfil/u', [App\Http\Controllers\adminController::class, 'update'])->name('update.perfil');

Route::get('/almacen', [App\Http\Controllers\almacenController::class, 'index'])->name('almacen.index');
Route::get('/almacen/create', [App\Http\Controllers\almacenController::class, 'create'])->name('almacen.create');
Route::get('/almacen/edit/{id}', [App\Http\Controllers\almacenController::class, 'edit'])->name('almacen.edit');

Route::get('/almacen/reportes', [App\Http\Controllers\almacenController::class, 'reportes'])->name('almacen.reportes');
Route::delete('almacen/delete/{id}', [App\Http\Controllers\almacenController::class, 'destroy'])->name('almacen.destroy');
Route::get('/almacen/delete/m/{id}', [App\Http\Controllers\almacenController::class, 'deletem'])->name('almacen.delete.modal');

Route::post('/almacen/store', [App\Http\Controllers\almacenController::class, 'store'])->name('almacen.store');
Route::patch('/almacen/update/{id}', [App\Http\Controllers\almacenController::class, 'update'])->name('almacen.update');
Route::delete('almacen/delete/{id}', [App\Http\Controllers\almacenController::class, 'destroy'])->name('almacen.destroy');
Route::get('/almacen/reportes/exp', [App\Http\Controllers\almacenController::class, 'export_reporte_general'])->name('reportes.general');

Route::get('/almacen/reportes/exp/{id}/{id_partida}', [App\Http\Controllers\almacenController::class, 'export_reporte_individual'])->name('reportes.individual');
Route::get('/almacen/reportes/exp/pdf/{id}/{id_partida}', [App\Http\Controllers\almacenController::class, 'export_reporte_individual_pdf'])->name('reportes.individual.pdf');
Route::get('/almacen/reportes/exp/pdf', [App\Http\Controllers\almacenController::class, 'export_reporte_general_pdf'])->name('reportes.general.pdf');

