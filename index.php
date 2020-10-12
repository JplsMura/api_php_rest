<?php

require('Route.php');
require_once('Controller/User/UserController.php');
//include('src\Service\Header.php');

// Add base route (startpage)
Route::add('/',function(){
    echo 'home';
});

Route::add('/users', function (UserController $userController) {

  var_dump($userController->index());
});

// Accept only numbers as parameter. Other characters will result in a 404 error
Route::add('/foo/([0-9]*)',function($var1){
    echo $var1.' is a great number!';
});

Route::run('/');