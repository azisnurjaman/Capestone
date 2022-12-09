<?php
namespace App\Http\Controllers;

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
Route::get('/', [LaporanController::class, 'index'])->name('laporan.index');
Route::post('/', [LaporanController::class, 'store'])->name('laporan.store');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/dashboard', function () {
        return view("admin.home");
    })->name('dashboard');
    Route::get('/laporan', [LaporanController::class, 'home'])->name('laporan.home');
    Route::patch('/laporan/{laporan}', [LaporanController::class, 'update'])->name('laporan.update');
    Route::delete('/laporan/{laporan}',[LaporanController::class, 'destroy'])->name('laporan.destroy');
});

require __DIR__.'/auth.php';