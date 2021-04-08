<?php 

require_once '../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;

//require_once("../src/Hello.php");
//require_once "/vendor/autoload.php";
//Autoloader::register();

$goodDay=new Hello();
echo "<h1>My Hello word</h1>";
echo $goodDay->talk();
echo "<h1>Hello word by Sir ehime</h1>";
echo SayHello::world();


