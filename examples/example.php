<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require __ROOT__.'./vendor/autoload.php';

use RemySd\MixedWord\Blender;

$blender = new Blender();

$result = $blender->mixe('hello'); // BlenderReverse by default
$result2 = $blender->mixe('hello', Blender::BLENDER_RANDOM);
$result3 = $blender->multipleMixe('hello', [Blender::BLENDER_RANDOM, Blender::BLENDER_RANDOM]);
$result4 = $blender->mixe('hello', Blender::BLENDER_NOT_VOWELS);
$result5 = $blender->mixe('hello', Blender::BLENDER_NO_CONSONANT);

echo $result;
echo "\n";
echo $result2;
echo "\n";
echo $result3;
echo "\n";
echo $result4;
echo "\n";
echo $result5;
