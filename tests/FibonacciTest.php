<?php

use App\Helpers\Fibonacci;

class FibonacciTest extends TestCase
{

    public function testValidNumber()
    {
        $fibonacciHelper = new Fibonacci();
        $response        = $fibonacciHelper->getValue(1);

        $this->assertEquals(1, $response, 'Responded Properly');
    }


    public function testNegative()
    {
        $fibonacciHelper = new Fibonacci();
        $response        = $fibonacciHelper->getValue(-1);

        $this->assertEquals(null, $response);
    }

    public function testException()
    {
        $this->expectException(TypeError::class);

        $fibonacciHelper = new Fibonacci();
        $response        = $fibonacciHelper->getValue('FFF');
    }

    public function testFloatNumber()
    {
        $fibonacciHelper = new Fibonacci();
        $response        = $fibonacciHelper->getValue(1.1);

        $this->assertEquals(1, $response, 'Float Number response like Int');
    }

    public function testMax()
    {
        $this->expectException(TypeError::class);

        $fibonacciHelper = new Fibonacci();
        $response        = $fibonacciHelper->getValue(100);
    }

}
