<?php

namespace RemySd\MixedWord\Type;

use RemySd\MixedWord\BlenderInterface;

class BlenderRandom implements BlenderInterface
{
    /**
     * Mixe all characters word in a new string randomly
     *
     * @param string $word
     *
     * @return string
     */
    public function doMixe(string $word): string
    {
        $result = "";
        $characters = str_split($word);
        $nbMaxCharacter = count($characters);

        for($i = $nbMaxCharacter - 1; $i >= 0; $i--) {
            $rnd = rand(0, count($characters) - 1);

            $result .= $characters[$rnd];
            unset($characters[$rnd]);

            $characters = array_values($characters); // re-indexing
        }

        return $result;
    }

    public function getDependencyMixe(): array
    {
        return [];
    }

    public static function getName(): string
    {
        return 'BlenderRandom';
    }
}