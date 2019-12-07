<?php


namespace MixedWord\Type;


use MixedWord\BlenderInterface;

class BlenderNotVowels implements BlenderInterface
{
    const VOWELS_LETTER = ['a', 'e', 'i', 'o', 'u', 'y'];

    /**
     * Remove all vowels in the word
     *
     * @param string $word
     *
     * @return string
     */
    public function doMixe(string $word): string
    {
        $result = "";

        foreach (str_split($word) as $character) {
            if (in_array($character, self::VOWELS_LETTER)) {
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
        return 'BlenderNotVowels';
    }
}
