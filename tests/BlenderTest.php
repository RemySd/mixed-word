<?php

namespace Tests;

use RemySd\MixedWord\Blender;
use PHPUnit\Framework\TestCase;
use Tests\BlenderAbstract;

class BlenderTest extends BlenderAbstract
{
    public function testBlenderNotFound(): void
    {
        $this->expectException(\Exception::class);

        $word = $this->blender->mixe('hello', 'BlenderNotFound');
    }

    public function testMultipleBlender(): void
    {
        $expected = 'llh';
        $actual = $this->blender->multipleMixe('hello', [Blender::BLENDER_REVERSE, Blender::BLENDER_NOT_VOWELS]);

        $this->assertEquals($expected, $actual);
    }

    public function testOptionsResolver(): void
    {
        $this->assertEquals(
            'heo',
            $this->blender->mixe(
                'hello',
                Blender::BLENDER_REMOVE_CHARACTER,
                ['character' => 'l']
            )
        );
    }
}
