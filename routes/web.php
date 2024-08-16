<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvestimentoController;

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

Route::get('investimentos', [InvestimentoController::class, 'index'])->name('investimentos.index');
Route::get('investimentos/{id}', [InvestimentoController::class, 'show'])->name('investimentos.show');