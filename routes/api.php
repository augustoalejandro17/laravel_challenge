<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Order;
use App\Models\People;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/persona', function (){
    return(Order::all());
});
Route::get('/persona/:id', function ($id){
    return(Order::find($id));
});

Route::get('/order', function (Request $request){
    return(People::all());
});
Route::get('/order/:id', function ($id){
    return(People::find($id));
});
