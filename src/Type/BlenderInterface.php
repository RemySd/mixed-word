<?php

namespace RemySd\Type;

interface BlenderInterface
{
    public function doMixe(string $word): string;

    public function getDependencyMixe(): array;

    public function getName(): string;
}