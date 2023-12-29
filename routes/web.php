<?php

use App\Http\Controllers\BigONotationController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::GET('/constant-time-complexity', [BigONotationController::class, 'constantTimeComplexity']);  //o(1)
Route::GET('/logarithmic-time-complexity', [BigONotationController::class, 'logarithmicTimeComplexity']); //o(log n)
Route::GET('/square-root-of-n', [BigONotationController::class, 'squareRootOfN']); 
Route::GET('/linear-time-complexity', [BigONotationController::class, 'linearTimeComplexity']); //o(n)
Route::GET('/quadratic-time-complexity', [BigONotationController::class, 'quadraticTimeComplexity']); //o(n^2)



