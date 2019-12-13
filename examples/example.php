<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require __ROOT__.'./vendor/autoload.php';

use RemySd\MixedWord\Blender;

$blender = new Blender();

echo $blender->mixe('hello'); // BlenderReverse by default
echo "\n";
echo $blender->mixe('hello', Blender::BLENDER_RANDOM);
echo "\n";
echo $blender->multipleMixe('hello', [Blender::BLENDER_RANDOM, Blender::BLENDER_RANDOM]);
echo "\n";
echo $blender->mixe('hello', Blender::BLENDER_NOT_VOWELS);
echo "\n";
echo $blender->mixe('hello', Blender::BLENDER_NO_CONSONANT);
echo "\n";
echo $blender->mixe('hello', Blender::BLENDER_UPPER_LOWER_LOOP);
echo "\n";
echo $blender->mixe('hello my friend', Blender::BLENDER_REMOVE_SPACE);
echo "\n";
echo $blender->mixe('hello !', Blender::BLENDER_SPACE_BETWEEN);
echo "\n";
echo $blender->mixe('hello !', Blender::BLENDER_UPPER_VOWEL);

