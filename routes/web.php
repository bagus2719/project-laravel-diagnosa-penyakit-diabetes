<?php

use App\Http\Controllers\Controller;
use App\Models\Riwayat;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\SolusiController;
use App\Http\Controllers\RuleController;
use App\Models\Pasien;

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
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/users', [UserController::class, 'index'])->name('users');
Route::post('/create-users', [UserController::class, 'store'])->name('create-users');
Route::put('/update-users/{id}', [UserController::class, 'update'])->name('update-users');
Route::delete('/hapus-users/{id}', [UserController::class, 'destroy'])->name('hapus-users');


Route::get('/pasien', [PasienController::class, 'index'])->name('pasien');
Route::post('/create-pasien', [PasienController::class, 'store'])->name('create-pasien');
Route::put('/update-pasien/{id}', [PasienController::class, 'update'])->name('update-pasien');
Route::delete('/hapus-pasien/{id}', [PasienController::class, 'destroy'])->name('hapus-pasien');
Route::get('/pasien/cetak-pasien', [PasienController::class, 'exportpdf'])->name('cetak-pasien');

Route::get('/gejala', [GejalaController::class, 'index'])->name('gejala');
Route::post('/create-gejala', [GejalaController::class, 'store'])->name('create-gejala');
Route::put('/update-gejala/{id}', [GejalaController::class, 'update'])->name('update-gejala');
Route::delete('/hapus-gejala/{id}', [GejalaController::class, 'destroy'])->name('hapus-gejala');

Route::get('/penyakit', [PenyakitController::class, 'index'])->name('penyakit');
Route::post('/create-penyakit', [PenyakitController::class, 'store'])->name('create-penyakit');
Route::put('/update-penyakit/{id}', [PenyakitController::class, 'update'])->name('update-penyakit');
Route::delete('/hapus-penyakit/{id}', [PenyakitController::class, 'destroy'])->name('hapus-penyakit');

Route::get('/hasil', [HasilController::class, 'index'])->name('hasil');
Route::post('/create-hasil', [HasilController::class, 'store'])->name('create-hasil');
Route::put('/update-hasil/{id}', [HasilController::class, 'update'])->name('update-hasil');
Route::delete('/hapus-hasil/{id}', [HasilController::class, 'destroy'])->name('hapus-hasil');

Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat');
Route::post('/create-riwayat', [RiwayatController::class, 'store'])->name('create-riwayat');
Route::put('/update-riwayat/{id}', [RiwayatController::class, 'update'])->name('update-riwayat');
Route::delete('/hapus-riwayat/{id}', [RiwayatController::class, 'destroy'])->name('hapus-riwayat');

Route::get('/solusi', [SolusiController::class, 'index'])->name('solusi');
Route::post('/create-solusi', [SolusiController::class, 'store'])->name('create-solusi');
Route::put('/update-solusi/{id}', [SolusiController::class, 'update'])->name('update-solusi');
Route::delete('/hapus-solusi/{id}', [SolusiController::class, 'destroy'])->name('hapus-solusi');

Route::get('/rule', [RuleController::class, 'index'])->name('rule');
Route::post('/create-rule', [RuleController::class, 'store'])->name('create-rule');
Route::put('/update-rule/{id}', [RuleController::class, 'update'])->name('update-rule');
Route::delete('/hapus-rule/{id}', [RuleController::class, 'destroy'])->name('hapus-rule');