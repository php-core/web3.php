<?php

namespace Test\Unit;

use Test\TestCase;
use phpseclib\Math\BigInteger as BigNumber;
use PHPCore\Formatters\BigNumberFormatter;

class BigNumberFormatterTest extends TestCase
{
    /**
     * formatter
     * 
     * @var \PHPCore\Formatters\BigNumberFormatter
     */
    protected $formatter;

    /**
     * setUp
     * 
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->formatter = new BigNumberFormatter;
    }

    /**
     * testFormat
     * 
     * @return void
     */
    public function testFormat()
    {
        $formatter = $this->formatter;

        $bigNumber = $formatter->format(1);
        $this->assertEquals($bigNumber->toString(), '1');
        $this->assertTrue($bigNumber instanceof BigNumber);
    }
}