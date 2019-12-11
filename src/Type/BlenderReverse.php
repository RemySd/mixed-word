<?php

namespace RemySd\MixedWord\Type;

use RemySd\MixedWord\BlenderInterface;

class BlenderReverse implements BlenderInterface
{
    /**
     * Reverse all characters
     *
     * @param string $word
     *
     * @return string
     */
    public function doMixe(string $word, array $options = []): string
    {
        return strrev($word);
    }

    public function getDependencyMixe(): array
    {
        return [];
    }

    public static function getName(): string
    {
        return 'BlenderReverse';
    }

    public function getOptionResolver(): array
    {
        return [];
    }
}