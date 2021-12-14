<?php
require 'vendor/autoload.php';

use CowSay\Cow;
$bessie = new Cow('ciao tutti');
// store the output in a variable
$output = $bessie->say('ciao tutti !');
echo $output;

// or just echo the object for direct output
echo $bessie;
