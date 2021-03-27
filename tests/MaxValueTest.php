<?php

use FauzanUnitTest\MaxValue;
use PHPUnit\Framework\TestCase;

/**
 * Test
 * @group group
 */
class MaxValueTest extends TestCase
{
    private $input = [4,3,2,1];
    /** @test */
    public function testValidInput()
    {
        $this->assertInstanceOf(
            MaxValue::class,
            MaxValue::fromArray($this->input)
        );
    }

    /** @test */
    public function testValidOutput()
    {
        $this->assertThat(MaxValue::fromArray($this->input)->getMaxValue(),$this->equalTo(4));
    }
}
