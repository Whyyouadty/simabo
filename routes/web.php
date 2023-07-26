<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\GateController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\KoordinatController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\UserController;
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

Route::get('/'           , [DashboardController  ::class, 'index' ])->name('dashboard'        );
Route::get('/akun'       , [AkunController       ::class, 'index' ])->name('pages.akun'       );
Route::get('/departement', [DepartementController::class, 'index' ])->name('pages.departement');
Route::get('/jabatan'    , [JabatanController    ::class, 'index' ])->name('pages.jabatan'    );
Route::get('/koordinat'  , [KoordinatController  ::class, 'index' ])->name('pages.koordinat'  );
Route::get('/setup'      , [SetupController      ::class, 'index' ])->name('pages.setup'      );
Route::get('/gate'       , [GateController       ::class, 'index' ])->name('pages.gate'       );
Route::get('/user'       , [UserController       ::class, 'index' ])->name('pages.user'       );
Route::get('/log'        , [LogController        ::class, 'index' ])->name('pages.log'        );
Route::get('/kehadiran'  , [KehadiranController  ::class, 'index' ])->name('pages.kehadiran'  );