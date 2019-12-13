<?php

namespace Tests\blender;

use RemySd\MixedWord\Blender;
use Tests\BlenderAbstract;

class BlenderRemoveCharacterTest extends BlenderAbstract
{
    public function testWithConst(): void
    {
        $this->assertEquals(
            'hell',
            $this->blender->mixe(
                'hello',
                Blender::BLENDER_REMOVE_CHARACTER,
                ['character' => 'o']
            )
        );
    }

    public function testWithoutConst(): void
    {
        $this->assertEquals(
            'hell',
            $this->blender->mixe(
                'hello',
                'BlenderRemoveCharacter',
                ['character' => 'o']
            )
        );
    }

    public function testWithoutOptions(): void
    {
        $this->assertEquals(
            'hello',
            $this->blender->mixe(
                'h e ll o',
                Blender::BLENDER_REMOVE_CHARACTER
            )
        );
    }
}