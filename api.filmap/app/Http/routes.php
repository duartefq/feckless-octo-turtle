<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->welcome();
});

// Generate application key
$app->get('/key', function() {
    return str_random(32);
});

/*
	Get near films based on coordinates

	@param distance, lat, long
	@return json with omdb_id, (lat, long) and distance
*/
$app->get('/near/{distance},{lat},{long}', 'GeoController@filmsAround');


