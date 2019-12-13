<?php

namespace Tests\blender;

use RemySd\MixedWord\Blender;
use Tests\BlenderAbstract;

class BlenderUpperLowerLoopTest extends BlenderAbstract
{
    public function testWithConst(): void
    {
        $this->assertEquals('HeLlO', $this->blender->mixe('hello', Blender::BLENDER_UPPER_LOWER_LOOP));
    }

    public function testWithoutConst(): void
    {
        $this->assertEquals('HeLlO', $this->blender->mixe('hello', 'BlenderUpperLowerLoop'));
    }
}
