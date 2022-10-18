<?php

namespace DesignPatterns\Creational;

abstract class AbstractVehicle
{
    protected $cars = [];

    public function __construct(array $cars)
    {
        $this->cars = $cars;
    }

    public static function getVehicle()
    {

    }
}