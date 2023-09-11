# libCalculator

libCalculator is a simple PHP library for performing various mathematical calculations. It provides functions for basic arithmetic operations, as well as additional mathematical functions.

## Features

- Addition
- Subtraction
- Multiplication
- Division (with error handling for division by zero)
- Percentage calculation
- Exponentiation
- Square root
- Sine, cosine, and tangent calculations

## Installation

You can install this library via Composer:

```shell
composer require amitminer/libcalculator
```

## Usage

```php
use AmitxD\libCalculator\libCalculator;

$result1 = libCalculator::add(10, 10);
$result2 = libCalculator::subtract(10, 10);
$result3 = libCalculator::multiply(5, 10);
$result4 = libCalculator::divide(10, 5);
$result5 = libCalculator::percentage(25, 50);
$result6 = libCalculator::exponentiation(2, 3);
$result7 = libCalculator::squareRoot(25);
$result8 = libCalculator::sine(deg2rad(30));
$result9 = libCalculator::cosine(deg2rad(45));
$result10 = libCalculator::tangent(deg2rad(60));

echo "Addition: $result1\n";
echo "Subtraction: $result2\n";
echo "Multiplication: $result3\n";
echo "Division: $result4\n";
echo "Percentage: $result5\n";
echo "Exponentiation: $result6\n";
echo "Square Root: $result7\n";
echo "Sine: $result8\n";
echo "Cosine: $result9\n";
echo "Tangent: $result10\n";
```

## Documentation

Detailed documentation for each function and class is available in the [Wiki](https://github.com/Amitminer/libCalculator/wiki).

## License

This library is open-source and licensed under the [MIT License](LICENSE.md).

## Contributions

Contributions and bug reports are welcome! Please feel free to open issues or pull requests on the [GitHub repository](https://github.com/Amitminer/libCalculator).
