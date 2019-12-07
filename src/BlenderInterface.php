<?php

namespace RemySd\MixedWord;

interface BlenderInterface
{
    public function doMixe(string $word): string;

    public function getDependencyMixe(): array;

    public static function getName(): string;
}