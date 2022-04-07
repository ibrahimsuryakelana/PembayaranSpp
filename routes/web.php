<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController as ASC;
use App\Http\Controllers\KelasController as AKC;
use App\Http\Controllers\SppController as ASPPC;
use App\Http\Controllers\UserController as AUC;
use App\Http\Controllers\PembayaranController as APC;
use App\Http\Controllers\HistoriController as HC;
use App\Http\Controllers\PPetugasController as PPC;
use App\Http\Controllers\HPetugasController as PHC;

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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function(){
    
    //Route Admin Siswa
    Route::get('/admin/siswa', [ASC::class, 'index']);
    Route::get('/admin/siswa/create', [ASC::class, 'create']);
    Route::post('/admin/siswa/store', [ASC::class, 'store']);
    Route::get('/admin/siswa/{nisn}/edit', [ASC::class, 'edit']);
    Route::post('/admin/siswa/{nisn}/update', [ASC::class, 'update']);
    Route::get('/admin/siswa/{nisn}/delete', [ASC::class, 'delete']);

    //Route Admin kelas
    Route::get('/admin/kelas', [AKC::class, 'index']);
    Route::get('/admin/kelas/create', [AKC::class, 'create']);
    Route::post('/admin/kelas/store', [AKC::class, 'store']);
    Route::get('/admin/kelas/{id}/edit', [AKC::class, 'edit']);
    Route::post('/admin/kelas/{id}/update', [AKC::class, 'update']);
    Route::get('/admin/kelas/{id}/delete', [AKC::class, 'delete']);

    //Route Admin spp
    Route::get('/admin/spp', [ASPPC::class, 'index']);
    Route::get('/admin/spp/create', [ASPPC::class, 'create']);
    Route::post('/admin/spp/store', [ASPPC::class, 'store']);
    Route::get('/admin/spp/{id}/edit', [ASPPC::class, 'edit']);
    Route::post('/admin/spp/{id}/update', [ASPPC::class, 'update']);
    Route::get('/admin/spp/{id}/delete', [ASPPC::class, 'delete']);

    //Route Admin spp
    Route::get('/admin/user', [AUC::class, 'index']);
    Route::get('/admin/user/create', [AUC::class, 'create']);
    Route::post('/admin/user/store', [AUC::class, 'store']);
    Route::get('/admin/user/{id}/edit', [AUC::class, 'edit']);
    Route::post('/admin/user/{id}/update', [AUC::class, 'update']);
    Route::get('/admin/user/{id}/delete', [AUC::class, 'delete']);

     //Route Admin Pembayaran
     Route::get('/admin/pembayaran', [APC::class, 'index']);
     Route::get('/admin/pembayaran/create', [APC::class, 'create']);
     Route::get('/admin/pembayaran/create2', [APC::class, 'create2']);
     Route::post('/admin/pembayaran/store', [APC::class, 'store']);
     Route::get('/admin/pembayaran/{id}/delete', [APC::class, 'delete']);
     Route::get('/pembayaran/export_excel', [APC::class, 'export_excel']);
     Route::get('/get-data/{nisn}', [APC::class, 'getData']);
     Route::get('/admin/pembayaran/{id}/struk', [APC::class, 'struk']);


     //Route Admin Histori
     Route::get('/admin/histori', [HC::class,'index']);
     Route::get('/admin/histori/{id}/struk', [HC::class, 'struk']);

     //Route Petugas Pembayaran
     Route::get('/petugas/pembayaran', [PPC::class, 'index']);
     Route::get('/petugas/pembayaran/create', [PPC::class, 'create']);
     Route::post('/petugas/pembayaran/store', [PPC::class, 'store']);
     Route::get('/petugas/pembayaran/{id}/delete', [PPC::class, 'delete']);
     Route::get('/pembayaran/export_excel', [PPC::class, 'export_excel']);
     Route::get('/get-data/{nisn}', [PPC::class, 'getData']);
     Route::get('/petugas/pembayaran/{id}/struk', [PPC::class, 'struk']);

     //Route Petugas Histori
     Route::get('/petugas/histori', [PHC::class,'index']);
     Route::get('/petugas/histori/{id}/struk', [PHC::class, 'struk']);

});

