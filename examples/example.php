<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require __ROOT__.'./vendor/autoload.php';

use MixedWord\Blender;

$blender = new Blender();

$result = $blender->mixe('bonjour'); // BlenderReverse by default
$result2 = $blender->mixe('bonjour', Blender::BLENDER_RANDOM);
$result3 = $blender->multipleMixe('hello', [Blender::BLENDER_RANDOM, Blender::BLENDER_RANDOM]);
$result4 = $blender->mixe('bonjour', Blender::BLENDER_NOT_VOWELS);

echo $result;
echo "\n";
echo $result2;
echo "\n";
echo $result3;
echo "\n";
echo $result4;
