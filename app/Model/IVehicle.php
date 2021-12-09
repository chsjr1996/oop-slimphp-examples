<?php

namespace App\Model;

interface IVehicle
{
    public function getType(): string;
    public function getModel(): string;

    public function getName(): string;
    public function setName(string $name): self;
    public function getMovimentType(): string;
    public function setMovimentType(string $movimentType): self;
}