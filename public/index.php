<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */
// $course = function($test_vale){
//   echo($test_vale."VIP课程");
// };
// $course('php中文网');
//
// function no_name_callback(){
//   return "php中文网";
// }
// $no_name = function ($callback){
//   echo $callback()."VIP课程";
// };
// $no_name("no_name_callback");
//
// $closure = function($name){
//   return sprintf('Hello %s',$name);
// };
// echo $closure('Yee Jason');
//
// $numberPlusOne = array_map(function($number){//
//   return $number +1;
// },[1,2,3]);
// print_r($numberPlusOne);
// function enclosePerson($name){
//   return function($doCommand) use ($name){
//     return sprintf('%s,%s',$name,$doCommand);
//   };
// }
// $clay = enclosePerson('Clay');
// var_dump($clay);
// echo $clay('get me sweet tea!');
// exit;
define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';
/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
