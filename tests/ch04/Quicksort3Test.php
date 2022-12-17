<?php

namespace ch04;

use Steven\AlgoDesignManual\ch04\Quicksort3;
use PHPUnit\Framework\TestCase;

final class Quicksort3Test extends TestCase
{
    public function testEmptyArray(): void
    {
        $sut = new Quicksort3();
        $this->assertEquals([], $sut->inPlaceSort(0, []));
    }

    public function testSingleIntArray(): void
    {
        $sut = new Quicksort3();
        $this->assertEquals([1], $sut->inPlaceSort(1, [1]));
    }

    public function testExampleCase(): void
    {
        $sut = new Quicksort3();
        $this->assertEquals([1, 2, 3, 5, 7, 8, 9], $sut->inPlaceSort(7, [1, 3, 9, 8, 2, 7, 5]));
    }

    public function testWithChars(): void
    {
        $sut = new Quicksort3();
        $this->assertEquals(['a', 'b', 'd', 's', 't', 'z'], $sut->inPlaceSort(6, ['d', 'a', 'z', 'b', 's', 't']));
    }
}
