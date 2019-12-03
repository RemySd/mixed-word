<?php

namespace RemySd;

use RemySd\Type\BlenderReverse;
use RemySd\BlenderRegistry;

class Blender
{
    const BLENDER_REVERSE = 'BlenderReverse';

    /**
     * @var array only with BlenderInterface element
     */
    private $blenderRegistry;

    private function __construct()
    {
        $this->blenderRegistry = new BlenderRegistry();
    }

    public function mixe(string $word, string $type = self::BLENDER_REVERSE): string
    {
        return 'null';
    }
}