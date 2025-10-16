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
use PHPCore\Validators\BlockHashValidator;
use PHPCore\Validators\QuantityValidator;
use PHPCore\Formatters\HexFormatter;
use PHPCore\Formatters\QuantityFormatter;

class GetUncleByBlockHashAndIndex extends EthMethod
{
    /**
     * validators
     * 
     * @var array
     */
    protected $validators = [
        BlockHashValidator::class, QuantityValidator::class
    ];

    /**
     * inputFormatters
     * 
     * @var array
     */
    protected $inputFormatters = [
        HexFormatter::class, QuantityFormatter::class
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