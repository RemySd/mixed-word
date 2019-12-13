<?php

namespace RemySd\MixedWord\Type;

use RemySd\MixedWord\BlenderInterface;

class BlenderRemoveSpace implements BlenderInterface
{
    public function doMixe(string $word, array $options = []): string
    {
        return str_replace(' ', '', $word);
    }

    public function getDependencyMixe(): array
    {
        return [];
    }

    public static function getName(): string
    {
        return 'BlenderRemoveSpace';
    }

    public function getOptionResolver(): array
    {
        return [];
    }
}