<?php

namespace Tests\blender;

use RemySd\MixedWord\Blender;
use Tests\BlenderAbstract;

class BlenderRemoveSpaceTest extends BlenderAbstract
{
    public function testWithConst(): void
    {
        $this->assertEquals('hellomyfriend', $this->blender->mixe('hello my friend', Blender::BLENDER_REMOVE_SPACE));
    }

    public function testWithoutConst(): void
    {
        $this->assertEquals('hellomyfriend', $this->blender->mixe('hello my friend', 'BlenderRemoveSpace'));
    }
}
