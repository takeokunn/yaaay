<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testHello()
    {
        $this->assertEquals("Hello", "Hello");
    }
}
