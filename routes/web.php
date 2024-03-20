<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\InvoiceController;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'api/v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function(){
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('invoices', InvoiceController::class);
});