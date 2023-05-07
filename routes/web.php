<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LaundryController;
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

Route::group(['prefix' => 'auth'], function() {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::group(['middleware' => 'auth'], function() {
        Route::post('logout', [AuthController::class, 'logout']);
    });
});
Route::group(['prefix' => 'admin'], function() {
    Route::get('dashboard', function() {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('pelanggan', function() {
        return view('admin.pelanggan');
    })->name('admin.pelanggan');
    Route::group(['prefix' => 'laundry'], function() {
        Route::get('transaksi', function() {
            return view('admin.laundry.transaksi');
        })->name('admin.laundry.transaksi');
        Route::get('rekap', function() {
            return view('admin.laundry.rekap');
        })->name('admin.laundry.rekap');
    });
});
Route::group(['middleware' => 'auth'], function() {
    Route::get('dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');
    Route::group(['prefix' => 'customer'], function() {
        Route::post('select-name', [CustomerController::class, 'selectName'])->name('customer.getData');
        Route::get('get-data/{id}', [CustomerController::class, 'show'])->name('customer.getData.show');
        Route::post('store-data', [CustomerController::class, 'store'])->name('customer.store');
    });
    Route::group(['prefix' => 'laundry'], function() {
        Route::get('getTypeLaundry', [LaundryController::class, 'getTypeLaundry'])->name('laundry.getTypeLaundry');
        Route::get('getTypeCloth', [LaundryController::class, 'getTypeCloth'])->name('laundry.getTypeCloth');
        Route::get('getDurationLaundry', [LaundryController::class, 'getDurationLaundry'])->name('laundry.getDurationLaundry');
    });
    Route::group(['prefix' => 'tambah-transaksi'], function() {
        Route::get('', [LaundryController::class, 'tambahTransaksi'])->name('tambah-transaksi');
        Route::post('', [LaundryContrller::class, 'store'])->name('tambah-transaksi.store');
    });
});
// Route::get('dashboard', function () {
//     return view('pages.dashboard');
// });

// Route::get('tambah-transaksi', function() {
//     return view('pages.tambah-transaksi');
// });
