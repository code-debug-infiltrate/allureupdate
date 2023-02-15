<?php

/*
|----------------------------------------------
| Routes Configuration
|----------------------------------------------
| 
| Here is where you can configuration 
| url web routes for your application.
*/

// static routes
$router->get('/', [HomeController::class, 'index']);

// dynamic routes
$router->get('/realDynamo/{dynamo}', [HomeController::class, 'realDynamo']);
