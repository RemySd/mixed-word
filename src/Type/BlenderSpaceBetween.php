<?php

namespace RemySd\MixedWord\Type;

use RemySd\MixedWord\Blender;
use RemySd\MixedWord\BlenderInterface;

class BlenderSpaceBetween implements BlenderInterface
{
    public function doMixe(string $word): string
    {
        $result = "";

        foreach (str_split($word) as $character) {
            $result .= $character . ' ';
        }

        return rtrim($result);
    }

    public function getDependencyMixe(): array
    {
        return [Blender::BLENDER_REMOVE_SPACE];
    }

    public static function getName(): string
    {
        return 'BlenderSpaceBetween';
    }
}