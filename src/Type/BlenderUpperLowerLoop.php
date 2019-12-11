<?php

namespace RemySd\MixedWord\Type;

use RemySd\MixedWord\BlenderInterface;

class BlenderUpperLowerLoop implements BlenderInterface
{
    public function doMixe(string $word, array $options = []): string
    {
        $result = "";
        $caps = true;

        foreach (str_split($word) as $character) {

            if ($caps) {
                $result .= strtoupper($character);
            } else {
                $result .= strtolower($character);
            }

            $caps = !$caps;
        }

        return $result;
    }

    public function getDependencyMixe(): array
    {
        return [];
    }

    public static function getName(): string
    {
        return 'BlenderUpperLowerLoop';
    }

    public function getOptionResolver(): array
    {
        return [];
    }
}