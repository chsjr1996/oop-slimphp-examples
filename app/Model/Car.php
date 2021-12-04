<?php

namespace App\Model;

class Car extends AbstractVehicle implements ICar
{
    protected string $type = 'Car';
    protected string $model = 'Ferrari';
    protected string $movimentType = 'Land';
}
