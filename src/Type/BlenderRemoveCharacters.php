<?php

namespace RemySd\MixedWord\Type;

use RemySd\MixedWord\Blender;
use RemySd\MixedWord\BlenderInterface;

class BlenderRemoveCharacters implements BlenderInterface
{
    public function doMixe(string $word, array $options = []): string
    {
        $result = "";

        foreach (str_split($word) as $character) {
            if (in_array($character, $options['characters'])) {
                continue;
            }

            $result .= $character;
        }

        return $result;
    }

    public function getDependencyMixe(): array
    {
        return [];
    }

    public static function getName(): string
    {
        return 'BlenderRemoveCharacters';
    }

    public function getOptionResolver(): array
    {
        return [
            'characters' => [' ']
        ];
    }
}