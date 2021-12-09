<?php

namespace App\Model;

class Car extends AbstractVehicle implements ICar
{
    protected string $type = 'Car';
    protected string $movimentType = 'Land';

    public function makeDrift(): string
    {
        return "Driting...";
    }
}
