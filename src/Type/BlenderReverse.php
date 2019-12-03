<?php

namespace RemySd\Type;

class BlenderReverse implements BlenderInterface
{

    public function doMixe(string $word): string
    {
        return "test";
    }

    public function getDependencyMixe(): array
    {
        return [];
    }

    public function getName(): string
    {
        return 'BlenderReverse';
    }
}