<?php 

require_once '../vendor/autoload.php';

use App\Wcs\Hello;

//require_once("../src/Hello.php");
//require_once "/vendor/autoload.php";
//Autoloader::register();

$goodDay=new Hello();

echo $goodDay->talk();