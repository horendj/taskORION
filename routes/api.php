<?php

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::apiResources([                                             //Для вывода данных об опр-ом кол-ве пользователей (http://127.0.0.1:8000/api/allPeople/?)
  'allPeople' => Api\PersonController::class,                     //Для вывода всех пользователей(http://127.0.0.1:8000/api/allPeople)
]);

Route::get('onePerson/{id}', 'Api\PersonController@person');      //Для вывода данных о конкретном пользователе (http://127.0.0.1:8000/api/onePerson/?)
Route::get('richPerson', 'Api\PersonController@rich');            //Для вывода данных о пользователях, ту которых зп выше среднего (http://127.0.0.1:8000/api/richPerson)
