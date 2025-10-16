<?php

/**
 * This file is part of web3.php package.
 * 
 * (c) Kuan-Cheng,Lai <alk03073135@gmail.com>
 * 
 * @author Peter Lai <alk03073135@gmail.com>
 * @license MIT
 */

namespace PHPCore\Formatters;

use InvalidArgumentException;
use PHPCore\Utils;
use PHPCore\Formatters\IFormatter;

class NumberFormatter implements IFormatter
{
    /**
     * format
     * 
     * @param int|float $value
     * @return int|float
     */
    public static function format($value)
    {
        return $value;
    }
}