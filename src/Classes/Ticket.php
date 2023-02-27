<?php

namespace App\Classes;

use App\Interfaces\PromoteStrategyInterface;

class Ticket
{
    private PromoteStrategyInterface $_promoteStrategy;
    private ?float $_price;
    private ?string $_name;

    public function __construct()
    {
        // 
    }

    public function getPromoteStrategy(): PromoteStrategyInterface
    {
        return $this->_promoteStrategy;
    }

    public function setPromoteStrategy(PromoteStrategyInterface $promoteStrategy): void
    {
        $this->_promoteStrategy = $promoteStrategy;
    }

    public function getPrice(): ?float
    {
        return $this->_price;
    }

    public function setPrice(?float $price): void
    {
        $this->_price = $price;
    }

    public function getName(): ?string
    {
        return $this->_name;
    }

    public function setName(?string $name): void
    {
        $this->_name = $name;
    }

    public function getPromotedPrice(): float
    {
        return $this->_promoteStrategy->doDiscount($this->_price);
    }
}