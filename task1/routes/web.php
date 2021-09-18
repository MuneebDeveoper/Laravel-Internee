<?php

use Facade\FlareClient\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

Route::get('/', [ProjectController::class,'index']);

Route::get('/add_project', [ProjectController::class,'addproject']);

Route::get('/my-plan', [ProjectController::class,'myplan']);

Route::get('/report', [ProjectController::class,'report']);

Route::get('/tester_report', [ProjectController::class,'testerreport']);


