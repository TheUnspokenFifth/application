<?php
//this is my controller

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload file
require_once('vendor/autoload.php');

//Instantiate the F3 Base Class
$f3 = Base::instance();
//Base f3 = new Base();


//Define a default root
$f3->route('GET /', function(){
    echo "<h1>Hello!</h1>;";
});

//run fat-free
$f3->run();
