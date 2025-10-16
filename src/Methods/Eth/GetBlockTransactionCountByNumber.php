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
use PHPCore\Validators\QuantityValidator;
use PHPCore\Formatters\OptionalQuantityFormatter;
use PHPCore\Formatters\BigNumberFormatter;

class GetBlockTransactionCountByNumber extends EthMethod
{
    /**
     * validators
     * 
     * @var array
     */
    protected $validators = [
        QuantityValidator::class
    ];

    /**
     * inputFormatters
     * 
     * @var array
     */
    protected $inputFormatters = [
        OptionalQuantityFormatter::class
    ];

    /**
     * outputFormatters
     * 
     * @var array
     */
    protected $outputFormatters = [
        BigNumberFormatter::class
    ];

    /**
     * defaultValues
     * 
     * @var array
     */
    protected $defaultValues = [
        'latest'
    ];
}