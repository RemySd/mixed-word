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

    public function testNoConsonant(): void
    {
        $this->assertEquals('eo', $this->blender->mixe('hello', Blender::BLENDER_NO_CONSONANT));
        $this->assertEquals('eo', $this->blender->mixe('hello', 'BlenderNoConsonant'));
    }

    public function testUpperLowerLoop(): void
    {
        $this->assertEquals('HeLlO', $this->blender->mixe('hello', Blender::BLENDER_UPPER_LOWER_LOOP));
        $this->assertEquals('HeLlO', $this->blender->mixe('hello', 'BlenderUpperLowerLoop'));
    }

    public function testRemoveSpace(): void
    {
        $this->assertEquals('hellomyfriend', $this->blender->mixe('hello my friend', Blender::BLENDER_REMOVE_SPACE));
        $this->assertEquals('hellomyfriend', $this->blender->mixe('hello my friend', 'BlenderRemoveSpace'));
    }

    public function testSpaceBetween(): void
    {
        $this->assertEquals('h e l l o', $this->blender->mixe('hello', Blender::BLENDER_SPACE_BETWEEN));
        $this->assertEquals('h e l l o', $this->blender->mixe('hello', 'BlenderSpaceBetween'));
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

    public function testRemoveCharacter(): void
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

    public function testRemoveCharacters(): void
    {
        $this->assertEquals(
            'h',
            $this->blender->mixe(
                'hello',
                Blender::BLENDER_REMOVE_CHARACTERS,
                ['characters' => ['o', 'e', 'l']]
            )
        );
    }

}
