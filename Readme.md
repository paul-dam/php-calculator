# PHP Calculator library

⚠️ This is just a sandbox project, installing it as an package is not recomended.

[![Latest Stable Version](https://poser.pugx.org/pdam/calculator/v/stable)](https://packagist.org/packages/pdam/calculator)
[![Total Downloads](https://poser.pugx.org/pdam/calculator/downloads)](https://packagist.org/packages/pdam/calculator)
[![Latest Unstable Version](https://poser.pugx.org/pdam/calculator/v/unstable)](https://packagist.org/packages/pdam/calculator)
[![License](https://poser.pugx.org/pdam/calculator/license)](https://packagist.org/packages/pdam/calculator)
[![composer.lock](https://poser.pugx.org/pdam/calculator/composerlock)](https://packagist.org/packages/pdam/calculator)
[![Code Climate](https://codeclimate.com/github/pawel-damasiewicz/php-calculator/badges/gpa.svg)](https://codeclimate.com/github/pawel-damasiewicz/php-calculator)

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
