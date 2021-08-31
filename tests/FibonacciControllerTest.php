<?php

class FibonacciControllerTest extends TestCase
{

    public function testIfString()
    {
        $this->get('/fibonacci/FKLE');
        $this->assertResponseStatus(400);
    }

    public function testValueIfString()
    {
        $this->get('/fibonacci/FKLE');
        $expected = json_encode(['value' => null]);

        $this->assertJsonStringEqualsJsonString($expected, $this->response->content());
    }

    public function testValidNumber()
    {
        $this->get('/fibonacci/2');
        $this->assertResponseOk();
    }

    public function testValueIfValidNumber()
    {
        $this->get('/fibonacci/0');
        $expected = json_encode(['value' => 0]);
        $this->assertEquals($expected, $this->response->content());
    }


}
