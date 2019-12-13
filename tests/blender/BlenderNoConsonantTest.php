<?php

namespace Tests\blender;

use RemySd\MixedWord\Blender;
use Tests\BlenderAbstract;

class BlenderNoConsonant extends BlenderAbstract
{
    public function testWithConst(): void
    {
        $this->assertEquals('eo', $this->blender->mixe('hello', Blender::BLENDER_NO_CONSONANT));
    }

    public function testWithoutConst(): void
    {
        $this->assertEquals('eo', $this->blender->mixe('hello', 'BlenderNoConsonant'));
    }
}
