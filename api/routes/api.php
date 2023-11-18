<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('logout', 'AuthController@logout');
Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::post('refresh', 'AuthController@refresh');

Route::get('users', 'UserController@get');

Route::get('transactions', 'TransactionController@allTransactions');
Route::get('/transaction/{transaction_id}', 'TransactionController@transactionsDetails');
Route::post('transaction', 'TransactionController@newTransactions');
Route::post('transaction-type', 'TransactionController@newTypeTransactions');

Route::post('bank', 'BankController@newBank');



