<?php

namespace App\Model;

class Plane extends AbstractVehicle implements IPlane
{
    protected string $type = 'Plane';
    protected string $movimentType = 'Air';

    public function takeOff(): string
    {
        return "Taking off...";
    }

    public function land(): string
    {
        return "Landing...";
    }
}
