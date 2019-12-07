<?php

namespace Tests;

use RemySd\MixedWord\Blender;
use PHPUnit\Framework\TestCase;

class BlenderTest extends TestCase
{
    private $blender;

    protected function setUp(): void
    {
        $this->blender = new Blender();
    }

    public function testReverseBlender(): void
    {
        $this->assertEquals('olleh', $this->blender->mixe('hello'));
        $this->assertEquals('olleh', $this->blender->mixe('hello', Blender::BLENDER_REVERSE));
        $this->assertEquals('olleh', $this->blender->mixe('hello', 'BlenderReverse'));
    }

    public function testReverseNotVowels(): void
    {
        $this->assertEquals('hll', $this->blender->mixe('hello', Blender::BLENDER_NOT_VOWELS));
        $this->assertEquals('hll', $this->blender->mixe('hello', 'BlenderNotVowels'));
    }

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
}
