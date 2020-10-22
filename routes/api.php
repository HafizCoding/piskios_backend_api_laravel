<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Dingo\Api\Routing\Helpers;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function($api) {
    // All rouetes goes here

$api->group(['namespace' => 'App\Http\Controllers\Api'], function() use($api) {

    $api->get('members', 'penggunaController@index');
    $api->get('members/{id}', 'penggunaController@show');
    $api->post('members', 'penggunaController@store');
    $api->put('members/{id}/update', 'penggunaController@update');
    $api->delete('members/{id}/delete', 'penggunaController@delete');

    $api->get('test', function() {
        return 1;
   });

});
});

