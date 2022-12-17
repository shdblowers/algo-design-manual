<?php

namespace Steven\AlgoDesignManual\ch04;

class OrganizingBalls
{
    public function __construct(
        private int $maxQueries
    )
    {
    }

    /**
     * @param int $numOfBallTypes
     * @param array<array<int>> $containers
     * @return bool
     */
    public function swapSortPossible(int $numOfBallTypes, array $containers): bool
    {
        return true;
    }
}