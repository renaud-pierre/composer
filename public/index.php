<?php
/**
 * Created by PhpStorm.
 * User: brecl
 * Date: 03/04/2019
 * Time: 13:09
 */

namespace App\Wcs;
require __DIR__ . '/../vendor/autoload.php';
use App\Wcs\Hello;
use HelloWorld\SayHello as HelloWorld;
$hello = new App\Wcs\Hello();
$helloWorld = new HelloWorld();
echo $hello->talk();
echo $helloWorld::world();