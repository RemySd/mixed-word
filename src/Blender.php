<?php

namespace MixedWord;

use MixedWord\BlenderRegistry;

class Blender
{
    const BLENDER_REVERSE = 'BlenderReverse';
    const BLENDER_RANDOM = 'BlenderRandom';
    const BLENDER_NOT_VOWELS = 'BlenderNotVowels';

    /**
     * @var BlenderRegistry only with BlenderInterface element
     */
    private $blenderRegistry;

    public function __construct()
    {
        $this->blenderRegistry = new BlenderRegistry();
    }

    public function mixe(string $word, string $type = self::BLENDER_REVERSE): string
    {
        $blender = $this->blenderRegistry->get($type);

        if ($blender->getDependencyMixe()) {
            foreach ($blender->getDependencyMixe() as $dependencyBlenderName) {
                $word = $this->blenderRegistry->get($dependencyBlenderName)->doMixe($word);
            }
        }

        return $this->blenderRegistry->get($type)->doMixe($word);
    }

    public function multipleMixe(string $word, array $types = [self::BLENDER_REVERSE]): string
    {
        foreach ($types as $type) {
            $word = $this->mixe($word, $type);
        }

        return $word;
    }
}
