<?php

namespace Tests\blender;

use RemySd\MixedWord\Blender;
use Tests\BlenderAbstract;

class BlenderRemoveCharactersTest extends BlenderAbstract
{
    public function testWithConst(): void
    {
        $this->assertEquals(
            'hll',
            $this->blender->mixe(
                'hello',
                Blender::BLENDER_REMOVE_CHARACTERS,
                ['characters' => ['o', 'e']]
            )
        );
    }

    public function testWithoutConst(): void
    {
        $this->assertEquals(
            'hll',
            $this->blender->mixe(
                'hello',
                'BlenderRemoveCharacters',
                ['characters' => ['o', 'e']]
            )
        );
    }

    public function testWithoutOptions(): void
    {
        $this->assertEquals(
            'hello',
            $this->blender->mixe(
                'h e ll o',
                Blender::BLENDER_REMOVE_CHARACTERS
            )
        );
    }
}