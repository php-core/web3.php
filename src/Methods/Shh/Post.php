<?php

/**
 * This file is part of web3.php package.
 * 
 * (c) Kuan-Cheng,Lai <alk03073135@gmail.com>
 * 
 * @author Peter Lai <alk03073135@gmail.com>
 * @license MIT
 */

namespace PHPCore\Methods\Shh;

use InvalidArgumentException;
use PHPCore\Methods\EthMethod;
use PHPCore\Formatters\PostFormatter;
use PHPCore\Validators\PostValidator;

class Post extends EthMethod
{
    /**
     * validators
     * 
     * @var array
     */
    protected $validators = [
        PostValidator::class
    ];

    /**
     * inputFormatters
     * 
     * @var array
     */
    protected $inputFormatters = [
        PostFormatter::class
    ];

    /**
     * outputFormatters
     * 
     * @var array
     */
    protected $outputFormatters = [];

    /**
     * defaultValues
     * 
     * @var array
     */
    protected $defaultValues = [];
}