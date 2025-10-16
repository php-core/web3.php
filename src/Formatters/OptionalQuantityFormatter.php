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
use PHPCore\Validators\TagValidator;
use PHPCore\Formatters\QuantityFormatter;

class OptionalQuantityFormatter implements IFormatter
{
    /**
     * format
     * 
     * @param mixed $value
     * @return string
     */
    public static function format($value)
    {
        if (TagValidator::validate($value)) {
            return $value;
        }
        return QuantityFormatter::format($value);
    }
}