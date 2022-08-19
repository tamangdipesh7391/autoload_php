<?php

namespace Free;

use Plan as MasterPlan;

class Plan extends MasterPlan
{
    private const RATE = 0;
    protected array $features = ['0 GB of storage', '0 GB of bandwidth'];

    public function getRate() : int
    {
        return self::RATE;
    }
}