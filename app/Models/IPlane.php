<?php

namespace App\Models;

interface IPlane
{
    public function takeOff(): string;
    public function land(): string;
}