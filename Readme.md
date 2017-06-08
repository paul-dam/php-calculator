# PHP Calculator library
[![Build Status](https://travis-ci.org/pawel-damasiewicz/php-calculator.svg?branch=master)](https://travis-ci.org/pawel-damasiewicz/php-calculator)[![Code Climate](https://codeclimate.com/github/pawel-damasiewicz/php-calculator/badges/gpa.svg)](https://codeclimate.com/github/pawel-damasiewicz/php-calculator)

## How to use

- Install via composer
```
composer require pdam/php-calculator
```

- Create calculator
```
$calc = new \Pdam\Calculator\Decimal();
```

- Do operations
```
// Addition
$calc->doAddition(1, 4);

// Substraction
$calc->doSubstraction(4, 1);

// Multiplication
$calc->doMultiplication(2, 2);

// Division
$calc->doDivision(10, 2);
```

### Test
 - [PHPUnit](https://phpunit.de/getting-started.html "PHPUnit")
