<?php

use App\Http\Controllers\JadwalController;
use App\Http\Controllers\Mahasiswa_Controller;
use Illuminate\Support\Facades\Route;

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
Route::get('/home', function () {
    return view('home');
});
// Route::get('/jadwal', function () {
//     return view('jadwal');
// });

Route::get('/jadwal', [JadwalController::Class, 'index']);

Route::get('/mahasiswa', [Mahasiswa_Controller::class, 'index'])->name('mahasiswa.index');
Route::post('/mahasiswa/simpan', [Mahasiswa_Controller::class, 'simpan'])->name('mahasiswa.simpan');
Route::get('/mahasiswa/input', [Mahasiswa_Controller::class, 'input'])->name('mahasiswa.input');
Route::get('/mahasiswa/view/{id?}', [Mahasiswa_Controller::class, 'view'])->name('mahasiswa.view');
Route::get('/mahasiswa/remove/{id}', [Mahasiswa_Controller::class, 'remove'])->name('mahasiswa.remove');