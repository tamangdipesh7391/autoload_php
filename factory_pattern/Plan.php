<?php 

abstract class Plan
{
    protected array $features = [];

    abstract public function getRate() : int;

    public function getFeatures()
    {
        return $this->features;
    }
}