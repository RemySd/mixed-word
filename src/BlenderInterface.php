<?php

namespace RemySd\MixedWord;

interface BlenderInterface
{
    public function doMixe(string $word, array $options = []): string;

    public function getDependencyMixe(): array;

    public static function getName(): string;

    public function getOptionResolver(): array;
}
