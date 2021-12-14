<?php
require 'vendor/autoload.php';

use App\Wcs\Hello;
use CowSay\Cow;
$sayHello = new Hello();
echo $sayHello->talk();
$bessie = new Cow('ciao tutti');

// store the output in a variable
$output = $bessie->say('ciao tutti !');
echo $output;

// or just echo the object for direct output
echo $bessie;