<?php

namespace App\Classes;

use App\Interfaces\PromoteStrategyInterface;

class NoDiscountStrategy implements PromoteStrategyInterface
{
    public function doDiscount(float $price): float
    {
        return $price;
    }
}