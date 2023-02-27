<?php

namespace App\Classes;

use App\Interfaces\PromoteStrategyInterface;

class HalfDiscountStrategy implements PromoteStrategyInterface
{
    public function doDiscount(float $price): float
    {
        return $price * 0.5;
    }
}