<?php

namespace RemySd\MixedWord\Type;

use RemySd\MixedWord\BlenderInterface;

class BlenderBetween implements BlenderInterface
{
    public function doMixe(string $word, array $options = []): string
    {
        $result = "";

        foreach (str_split($word) as $character) {
            $result .= $character . $options['character'];
        }

        return rtrim($result, $options['character']);
    }

    public function getDependencyMixe(): array
    {
        return [];
    }

    public static function getName(): string
    {
        return 'BlenderBetween';
    }

    public function getOptionResolver(): array
    {
        return [
            'character' => ' '
        ];
    }
}