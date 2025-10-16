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
use PHPCore\Validators\TransactionValidator;
use PHPCore\Formatters\TransactionFormatter;

class SendTransaction extends EthMethod
{
   /**
     * validators
     * 
     * @var array
     */
    protected $validators = [
        TransactionValidator::class
    ];

    /**
     * inputFormatters
     * 
     * @var array
     */
    protected $inputFormatters = [
        TransactionFormatter::class
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