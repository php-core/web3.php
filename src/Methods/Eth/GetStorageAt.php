<?php

/**
 * This file is part of web3.php package.
 * 
 * (c) Kuan-Cheng,Lai <alk03073135@gmail.com>
 * 
 * @author Peter Lai <alk03073135@gmail.com>
 * @license MIT
 */

namespace PHPCore\Methods\Eth;

use InvalidArgumentException;
use PHPCore\Methods\EthMethod;
use PHPCore\Validators\TagValidator;
use PHPCore\Validators\QuantityValidator;
use PHPCore\Validators\AddressValidator;
use PHPCore\Formatters\AddressFormatter;
use PHPCore\Formatters\QuantityFormatter;
use PHPCore\Formatters\OptionalQuantityFormatter;

class GetStorageAt extends EthMethod
{
    /**
     * validators
     * 
     * @var array
     */
    protected $validators = [
        AddressValidator::class, QuantityValidator::class, [
            TagValidator::class, QuantityValidator::class
        ]
    ];

    /**
     * inputFormatters
     * 
     * @var array
     */
    protected $inputFormatters = [
        AddressFormatter::class, QuantityFormatter::class, OptionalQuantityFormatter::class
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
    protected $defaultValues = [
        2 => 'latest'
    ];
}