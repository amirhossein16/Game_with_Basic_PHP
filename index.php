<?php
error_reporting(E_ERROR | E_PARSE);

use App\Ford\MUSTANGGT;

require_once "vendor/autoload.php";

//************************ Show All Available Type Of Car To Initial ********************

//$dir = '.';
//$directories = glob($dir . '/*/*', GLOB_ONLYDIR);
//echo "Choose one of the cars : " . PHP_EOL;
//foreach ($directories as $directory) {
//    preg_match("/[A-Za-z]\w+$/", $directory, $matches);
//    foreach ($matches as $match) {
//        $dir = $match;
//        foreach (scandir("src/$dir") as $item) {
//            if ($item != "." && $item != "..") {
//                preg_match("/([\w]+)+.+([ph])\w+/", $item, $match);
//                echo $match[1] . PHP_EOL;
//            }
//        }
//    }
//}

// ********************** First Example ***********************

$car = new \App\BMW\BMWiXM60(47, [0, 0], [18, 18]);

$car->increaseFuel(2);
$car->moveRight()->moveRight()->moveRight()->moveRight()->moveRight()->moveRight()->moveUp()->moveUp()->moveUp()->moveUp()->moveUp()->moveUp();
$car->result();
echo "\e[0;32m Fuel Level =>" . $car->fuelLevel() . "\e[m";


// ********************** Second Example ***********************

//$car = new MUSTANGGT(11, [0, 0], [5, 5]);
//$car->moveUp()->moveUp()->moveUp()->moveUp()->moveLeft()->moveLeft()->moveLeft()->moveRight()->moveRight()->moveRight()->moveRight()->moveLeft();
//$car->result();
//print_r($car->getTheCurrentLocation());
//echo "\e[0;32m Fuel Level =>" . $car->fuelLevel() . "\e[m";
