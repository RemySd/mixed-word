<?php

namespace Tests\blender;

use RemySd\MixedWord\Blender;
use Tests\BlenderAbstract;

class BlenderNoVowels extends BlenderAbstract
{
    public function testWithConst(): void
    {
        $this->assertEquals('hll', $this->blender->mixe('hello', Blender::BLENDER_NOT_VOWELS));
    }

    public function testWithoutConst(): void
    {
        $this->assertEquals('hll', $this->blender->mixe('hello', 'BlenderNotVowels'));
    }
}
