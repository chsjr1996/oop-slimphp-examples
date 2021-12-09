<?php

namespace App\Model;

interface IPlane
{
    public function takeOff(): string;
    public function land(): string;
}