<?php

namespace RemySd\MixedWord;

use RemySd\MixedWord\BlenderRegistry;

class Blender
{
    const BLENDER_REVERSE = 'BlenderReverse';
    const BLENDER_RANDOM = 'BlenderRandom';
    const BLENDER_NOT_VOWELS = 'BlenderNotVowels';
    const BLENDER_NO_CONSONANT = 'BlenderNoConsonant';
    const BLENDER_UPPER_LOWER_LOOP = 'BlenderUpperLowerLoop';
    const BLENDER_SPACE_BETWEEN = 'BlenderSpaceBetween';
    const BLENDER_REMOVE_SPACE = 'BlenderRemoveSpace';
    const BLENDER_REMOVE_CHARACTER = 'BlenderRemoveCharacter';
    const BLENDER_REMOVE_CHARACTERS = 'BlenderRemoveCharacters';
    const BLENDER_BETWEEN = 'BlenderBetween';

    /**
     * @var BlenderRegistry only with BlenderInterface element
     */
    private $blenderRegistry;

    public function __construct()
    {
        $this->blenderRegistry = new BlenderRegistry();
    }

    public function mixe(string $word, string $type = self::BLENDER_REVERSE, array $options = []): string
    {
        $blender = $this->blenderRegistry->get($type);
        $options = $this->setOptionsResolver($blender, $options);

        if ($blender->getDependencyMixe()) {
            foreach ($blender->getDependencyMixe() as $dependencyBlenderName) {
                $word = $this->blenderRegistry->get($dependencyBlenderName)->doMixe($word);
            }
        }

        return $this->blenderRegistry->get($type)->doMixe($word, $options);
    }

    public function multipleMixe(string $word, array $types = [self::BLENDER_REVERSE]): string
    {
        foreach ($types as $type) {
            $word = $this->mixe($word, $type);
        }

        return $word;
    }

    private function setOptionsResolver(BlenderInterface $blender, array $options = []): array
    {
        if (empty($options)) {
            return $blender->getOptionResolver();
        }

        $optionsUpdated = [];

        foreach($blender->getOptionResolver() as $key => $value) {
            if(array_key_exists($key, $options)) {
                $optionsUpdated[$key] = $options[$key];
                continue;
            }

            // Default value to optionsResolver
            $optionsUpdated[$key] = $value;
        }

        return $optionsUpdated;
    }
}
