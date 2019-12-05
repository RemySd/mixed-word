<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require __ROOT__.'./vendor/autoload.php';

use MixedWord\Blender;


$blender = new Blender();

$result = $blender->mixe('bonjour', Blender::BLENDER_REVERSE);

echo $result;
