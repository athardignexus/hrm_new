<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\MutualFundController;
use App\Http\Controllers\GenEmpSalaryController;

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

    // return view('welcome');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::POST('/login', [LoginController::class, 'login_action'])->name('loginaction');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



    Route::group(
        ['prefix' => 'admin', 'as' => 'admin.'],
        function () {
            Route::get(
                '/',
                function () {
                    return view('admin.dashboard');
                }
            );
            // Route::get('gensalary', [GenEmpSalaryController::class, 'gen_form'])->name('gen_form');
            Route::resource('insurance', InsuranceController::class);
            Route::resource('MutualFund', MutualFundController::class);
            Route::resource('Employee', EmployeeController::class);
            Route::get('gensalary', [GenEmpSalaryController::class, 'genform'])->name('genform');
            Route::POST('emp_list', [GenEmpSalaryController::class, 'emp_list'])->name('emp_list');
            Route::POST('gensalary', [GenEmpSalaryController::class, 'gensalary'])->name('gensalary');
        }
    );

Route::group(['middleware' => ['auth', 'checkUser']], function () {
    Route::group(
        ['prefix' => 'user', 'as' => 'user.'],
        function () {

            Route::get(
                '/',
                function () {
                    return view('user.dashboard');
                }
            );

            Route::resource('Employee', EmployeeController::class);
            Route::resource('insurance', InsuranceController::class);
            Route::resource('MutualFund', MutualFundController::class);
        }
    );
});
