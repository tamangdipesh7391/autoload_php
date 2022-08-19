<?php

class PlanFactory
{
    public static function create(string $plan = 'Free') : Plan
    {
        $plan = "{$plan}\\Plan";
        if (!class_exists($plan)) {
            throw new \Exception("Plan not found");
        }

        return new $plan();
    }


}