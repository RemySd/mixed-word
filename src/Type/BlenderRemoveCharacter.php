<?php


namespace RemySd\MixedWord\Type;


use RemySd\MixedWord\BlenderInterface;

class BlenderRemoveCharacter implements BlenderInterface
{
    public function doMixe(string $word, array $options = []): string
    {
        $result = "";

        foreach (str_split($word) as $character) {
            if ($character === $options['character']) {
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
        return 'BlenderRemoveCharacter';
    }

    public function getOptionResolver(): array
    {
        return [
            'character' => ' '
        ];
    }
}
