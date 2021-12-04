<?php

namespace App\Model;

abstract class AbstractVehicle
{
    protected string $type;

    protected string $model;

    protected string $name = '';

    protected string $movimentType;

    public function getMovimentType()
    {
        return $this->movimentType;
    }
}
