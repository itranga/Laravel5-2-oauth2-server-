<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::post('oauth/access_token', function() {
    return Response::json(Authorizer::issueAccessToken());
});

Route::get('api', ['middleware' => 'oauth', function() {
 // return the protected resource
 //echo “success authentication”;
 $user_id=Authorizer::getResourceOwnerId(); // the token user_id
 $user=\App\User::find($user_id);// get the user data from database

return Response::json($user);
}]);