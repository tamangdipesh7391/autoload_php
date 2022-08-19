<?php

require_once './autoloader.php';

$obj = PlanFactory::create('free');
var_dump($obj->getRate());
var_dump($obj->getFeatures());