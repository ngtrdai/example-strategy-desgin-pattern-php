<?php

require './vendor/autoload.php';

use App\Classes\Ticket;
use App\Classes\NoDiscountStrategy;
use App\Classes\HalfDiscountStrategy;
use App\Classes\QuarterDiscountStrategy;

class Main
{
    public function __construct()
    {
        for ($i = 0; $i <= 5; $i++) {
            $straegyIndex = rand(0, 2);
            $ticket = new Ticket();
            $ticket->setName("Ticket {$i}");
            $ticket->setPrice(50 * $i);
            switch ($straegyIndex) {
                case 1:
                    $ticket->setPromoteStrategy(new HalfDiscountStrategy());
                    break;
                case 2:
                    $ticket->setPromoteStrategy(new QuarterDiscountStrategy());
                    break;
                default:
                    $ticket->setPromoteStrategy(new NoDiscountStrategy());
                    break;
            }

            $promoted = $ticket->getPromotedPrice();
            echo "{$ticket->getName()} price: {$ticket->getPrice()} promoted price: {$promoted}" . PHP_EOL;
        }
    }
}

new Main();