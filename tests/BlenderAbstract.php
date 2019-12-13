<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use RemySd\MixedWord\Blender;

abstract class BlenderAbstract extends TestCase
{
    /* @var Blender */
    protected $blender;

    protected function setUp(): void
    {
        $this->blender = new Blender();
    }
}
