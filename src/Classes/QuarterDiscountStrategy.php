<?php

namespace App\Classes;

use App\Interfaces\PromoteStrategyInterface;

class QuarterDiscountStrategy implements PromoteStrategyInterface
{
    public function doDiscount(float $price): float
    {
        return $price * 0.75;
    }
}