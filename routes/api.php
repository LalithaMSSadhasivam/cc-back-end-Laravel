<?php


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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// 2. user controller routing for loggin cross check
Route::get('/', 'UserController@index');

// 3. Logedin - To get current user Data - midleware used to access only after logged in
Route::get('/user', 'UserController@user')->middleware('auth:api');

// 4. Register - User
Route::post('/register','UserController@register');
