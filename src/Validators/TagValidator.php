<?php

/**
 * This file is part of web3.php package.
 * 
 * (c) Kuan-Cheng,Lai <alk03073135@gmail.com>
 * 
 * @author Peter Lai <alk03073135@gmail.com>
 * @license MIT
 */

namespace PHPCore\Validators;

use PHPCore\Validators\IValidator;
use PHPCore\Utils;

class TagValidator implements IValidator
{
    /**
     * validate
     *
     * @param string $value
     * @return bool
     */
    public static function validate($value)
    {
        $value = Utils::toString($value);
        $tags = [
            'latest', 'earliest', 'pending', 'safe', 'finalized'
        ];

        return in_array($value, $tags);
    }
}