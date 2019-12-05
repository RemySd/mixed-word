<?php

namespace MixedWord\Type;

class BlenderReverse implements BlenderInterface
{
    public function doMixe(string $word): string
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
}