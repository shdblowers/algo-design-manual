<?php

namespace ch04;

use Steven\AlgoDesignManual\ch04\OrganizingBalls;
use PHPUnit\Framework\TestCase;

final class OrganizingBallsTest extends TestCase
{
    public function testSampleInput(): void
    {
        $sut = new OrganizingBalls(2);

        $this->assertEquals(true, $sut->swapSortPossible(2, [[1, 1], [1, 1]]));
        $this->assertEquals(false, $sut->swapSortPossible(2, [[0, 2], [1, 1]]));
    }
}
