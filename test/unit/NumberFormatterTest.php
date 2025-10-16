<?php

namespace Test\Unit;

use Test\TestCase;
use PHPCore\Formatters\NumberFormatter;

class NumberFormatterTest extends TestCase
{
    /**
     * formatter
     * 
     * @var \PHPCore\Formatters\NumberFormatter
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
        $this->formatter = new NumberFormatter;
    }

    /**
     * testFormat
     * 
     * @return void
     */
    public function testFormat()
    {
        $formatter = $this->formatter;

        $number= $formatter->format('123');
        $this->assertEquals($number, 123);
    }
}