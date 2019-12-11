<?php

namespace RemySd\MixedWord\Type;

use RemySd\MixedWord\BlenderInterface;

/**
 * Put all vowels in uppercase
 *
 * Class BlenderUpperVowel
 * @package MixedWord\Type
 */
class BlenderUpperVowel implements BlenderInterface
{
    const VOWELS_LETTER = ['a', 'e', 'i', 'o', 'u', 'y'];

    public function doMixe(string $word): string
    {
        $result = '';

        foreach (str_split($word) as $character) {
            if (in_array($character , self::VOWELS_LETTER)) {
                $result .= strtoupper($character);
            } else {
                $result .= $character;
            }
        }

        return $result;
    }

    public function getDependencyMixe(): array
    {
        return [];
    }

    public static function getName(): string
    {
        return 'BlenderUpperVowel';
    }
}