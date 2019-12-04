<?php

namespace RemySd;

use RemySd\BlenderRegistry;

class Blender
{
    const BLENDER_REVERSE = 'BlenderReverse';

    /**
     * @var BlenderRegistry only with BlenderInterface element
     */
    private BlenderRegistry $blenderRegistry;

    public function __construct()
    {
        $this->blenderRegistry = new BlenderRegistry();
    }

    public function mixe(string $word, string $type = self::BLENDER_REVERSE): string
    {
        var_dump($this->blenderRegistry->get($type));
        return 'null';
    }
}
