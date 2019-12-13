<?php

namespace Tests\blender;

use RemySd\MixedWord\Blender;
use Tests\BlenderAbstract;

class BlenderReverseTest extends BlenderAbstract
{
    public function testWithConst(): void
    {
        $this->assertEquals('olleh', $this->blender->mixe('hello', Blender::BLENDER_REVERSE));
    }

    public function testWithoutConst(): void
    {
        $this->assertEquals('olleh', $this->blender->mixe('hello', 'BlenderReverse'));
    }

    /**
     * That is rhe default blender
     */
    public function testWithoutName(): void
    {
        $this->assertEquals('olleh', $this->blender->mixe('hello'));
    }
}
