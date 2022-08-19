<?php

namespace Pro;

use Plan as MasterPlan;

class Plan extends MasterPlan
{
    private const RATE = 200;
    protected array $features = ['1 GB of storage', '10 GB of bandwidth'];

    public function getRate() : int
    {
        return self::RATE;
    }

}