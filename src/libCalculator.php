<?php

declare(strict_types=1);

namespace AmitxD\libCalculator;

use ValueError;
use function sin;
use function sqrt;
use function tan;
use function cos;

/**
 * A library for performing various mathematical calculations.
 */
class libCalculator
{
    
    public function __construct()
    {
        // NOOP
    }

    /**
     * Adds two numbers.
     *
     * @param int|float $a The first number.
     * @param int|float $b The second number.
     * @return int|float The result of the addition.
     */
    public static function add(int|float $a, int|float $b): int|float
    {
        return $a + $b;
    }

    /**
     * Subtracts two numbers.
     *
     * @param int|float $a The first number.
     * @param int|float $b The second number.
     * @return int|float The result of the subtraction.
     */
    public static function subtract(int|float $a, int|float $b): int|float
    {
        return $a - $b;
    }

    /**
     * Multiplies two numbers.
     *
     * @param int|float $a The first number.
     * @param int|float $b The second number.
     * @return int|float The result of the multiplication.
     */
    public static function multiply(int|float $a, int|float $b): int|float
    {
        return $a * $b;
    }

    /**
     * Divides two numbers.
     *
     * @param int|float $a The dividend.
     * @param int|float $b The divisor (must not be zero).
     * @return int|float The result of the division.
     * @throws ValueError If division by zero is attempted.
     */
    public static function divide(int|float $a, int|float $b): int|float
    {
        if ($b == 0) {
            throw new ValueError("Cannot divide by zero");
        }
        return $a / $b;
    }

    /**
     * Calculates the percentage of a number.
     *
     * @param int|float $percent The percentage value.
     * @param int|float $of The base value.
     * @return int|float The result of the percentage calculation.
     */
    public static function percentage(int|float $percent, int|float $of): int|float
    {
        return ($percent / 100) * $of;
    }
    
    /**
     * Calculates the exponentiation of a base to an exponent.
     *
     * @param int|float $base The base value.
     * @param int|float $exponent The exponent value.
     * @return int|float The result of the exponentiation.
     */
    public static function exponentiation(int|float $base, int|float $exponent): int|float {
        return $base ** $exponent;
    }

    /**
     * Calculates the square root of a number.
     *
     * @param float $number The number (must be non-negative).
     * @return float The square root of the number.
     * @throws ValueError If a negative number is provided.
     */
    public static function squareRoot(float $number): float {
        if ($number < 0) {
            throw new ValueError("Cannot calculate the square root of a negative number");
        }
        return sqrt($number);
    }

    /**
     * Calculates the sine of an angle in radians.
     *
     * @param float $angleInRadians The angle in radians.
     * @return float The sine of the angle.
     */
    public static function sine(float $angleInRadians): float {
        return sin($angleInRadians);
    }

    /**
     * Calculates the cosine of an angle in radians.
     *
     * @param float $angleInRadians The angle in radians.
     * @return float The cosine of the angle.
     */
    public static function cosine(float $angleInRadians): float {
        return cos($angleInRadians);
    }

    /**
     * Calculates the tangent of an angle in radians.
     *
     * @param float $angleInRadians The angle in radians.
     * @return float The tangent of the angle.
     */
    public static function tangent(float $angleInRadians): float {
        return tan($angleInRadians);
    }
}
