<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Travel_PackageController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Transaksi_DetailController;
use App\Http\Controllers\LaporanController;
use App\Models\Travel_Package;
use FontLib\Table\Type\name;
use Illuminate\Support\Facades\Auth;
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
    $datas = travel_package::with(['transaksi'])->get();
    $user = Auth::id();
    return view('welcome',compact('datas','user'));
})->name('/');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('user')->group(function () {
    Route::get('/transaksiuser', [TransaksiController::class, 'index'])->name('transaksiuser');
    Route::get('/transaksi_user_detail', [Transaksi_DetailController::class, 'index'])->name('transaksi_user_detail');
    Route::get('/tambah/{id}', [App\Http\Controllers\TransaksiController::class, 'tambah'])->name('tambah');
    Route::post('/tambah2/{id}', [App\Http\Controllers\TransaksiController::class, 'tambah2'])->name('tambah2');
});
Route::middleware('admin')->group(function () {
    Route::resource('/user', UserController::class);
    Route::resource('/travel_package', Travel_PackageController::class);
    Route::resource('/transaksi', TransaksiController::class);
Route::resource('/transaksi_detail', Transaksi_DetailController::class);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');

Route::get('/laporan/pdf', [LaporanController::class, 'pdf'])->name('laporan.pdf');
});




