# Strategy example in PHP
This is an example of a strategy pattern in PHP.

## Description
The strategy pattern is a behavioral design pattern that allows you to define a family of algorithms, put each of them into a separate class, and make their objects interchangeable.

## UML
```mermaid
classDiagram
    Ticket o--|> PromoteStategyInterface
    PromoteStategyInterface <|-- NoDiscountStrategy
    PromoteStategyInterface <|-- HalfDiscountStrategy
    PromoteStategyInterface <|-- QuarterDiscountStrategy
    Ticket : +String name
    Ticket : +Float price
    Ticket : +PromoteStrategyInterface promoteStrategy
    Ticket : +setName()
    Ticket : +getNane()
    Ticket : +setPrice()
    Ticket : +getPrice()
    Ticket : +setPromoteStrategy()
    Ticket : +getPromoteStrategy()

    class PromoteStategyInterface {
        +doDiscount(float price)
    }

    class NoDiscountStrategy {
        +doDiscount(float price)
    }

    class HalfDiscountStrategy {
        +doDiscount(float price)
    }

    class QuarterDiscountStrategy {
        +doDiscount(float price)
    }

```
## Installation
```bash
composer install
php src/main.php
```

## Usage
```php
$context = new Context(new ConcreteStrategyA());
$context->execute();
```

## Output
```bash
Strategy A
```

