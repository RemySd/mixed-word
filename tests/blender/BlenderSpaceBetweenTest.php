<?php

namespace Tests\blender;

use RemySd\MixedWord\Blender;
use Tests\BlenderAbstract;

class BlenderSpaceBetweenTest extends BlenderAbstract
{
    public function testWithConst(): void
    {
        $this->assertEquals('h e l l o', $this->blender->mixe('hello', Blender::BLENDER_SPACE_BETWEEN));
    }

    public function testWithoutConst(): void
    {
        $this->assertEquals('h e l l o', $this->blender->mixe('hello', 'BlenderSpaceBetween'));
    }
}
