<?php

include 'routes/Route.php';
include 'config/env.php';
include 'config/database.php';
include 'Model/Model.php';
include 'Controller/Controller.php';

// Include all the controller files into index.php.
foreach (glob("Controller/*.php") as $filename)
{
    // Prevent the controller parent class being include again.
    if($filename == 'Controller/Controller.php')
        continue;
    include $filename;
}

// Include all the model files into index.php.
foreach (glob("Model/*.php") as $filename)
{
    // Prevent the model parent class being include again.
    if($filename == 'Model/Model.php')
        continue;
    include $filename;
}

Route::add('GET', '/login', 'LoginController@loginPage');

Route::route();

?>