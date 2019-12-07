<?php

namespace MixedWord;

use MixedWord\BlenderRegistry;

class Blender
{
    const BLENDER_REVERSE = 'BlenderReverse';

    /**
     * @var BlenderRegistry only with BlenderInterface element
     */
    private $blenderRegistry;

    public function __construct()
    {
        $this->blenderRegistry = new BlenderRegistry();
    }

    public function mixe(string $word, string $type = self::BLENDER_REVERSE): string
    {
        return $this->blenderRegistry->get($type)->doMixe($word);
    }
}
