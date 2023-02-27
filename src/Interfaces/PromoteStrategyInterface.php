<?php

namespace App\Interfaces;

interface PromoteStrategyInterface
{
    public function doDiscount(float $price): float;
}