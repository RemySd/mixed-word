<?php

namespace RemySd\MixedWord;

use RemySd\MixedWord\BlenderRegistry;

class Blender
{
    /**
     * All blenders names
     */
    const BLENDER_REVERSE = 'BlenderReverse';
    const BLENDER_RANDOM = 'BlenderRandom';
    const BLENDER_NOT_VOWELS = 'BlenderNotVowels';
    const BLENDER_NO_CONSONANT = 'BlenderNoConsonant';
    const BLENDER_UPPER_LOWER_LOOP = 'BlenderUpperLowerLoop';
    const BLENDER_SPACE_BETWEEN = 'BlenderSpaceBetween';
    const BLENDER_REMOVE_SPACE = 'BlenderRemoveSpace';
    const BLENDER_UPPER_VOWEL = 'BlenderUpperVowel';

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
