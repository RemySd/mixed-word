<?php

namespace Tests\blender;

use RemySd\MixedWord\Blender;
use Tests\BlenderAbstract;

class BlenderBetweenTest extends BlenderAbstract
{
    public function testWithConst(): void
    {
        $this->assertEquals(
            'hxexlxlxo',
            $this->blender->mixe(
                'hello',
                Blender::BLENDER_BETWEEN,
                ['character' => 'x']
            )
        );
    }

    public function testWithoutConst(): void
    {
        $this->assertEquals(
            'h-e-l-l-o',
            $this->blender->mixe(
                'hello',
                'BlenderBetween',
                ['character' => '-']
            )
        );
    }
}
