<?php

use App\iPlayerApi;

class iPlayerApiTest extends TestCase 
{
    protected $api;

    public function setUp()
    {
        $this->api = new iPlayerApi();
    }

    /** @test */
    public function it_get_a_list_by_letter()
    {
        $data = $this->api->getListByLetter('a');    

        $this->assertArrayHasKey('character', $data);
        $this->assertArrayHasKey('elements', $data);

    }

    /** @test */
    public function it_returns_an_exception()
    {
        $this->api->getListByLetter('=');
        $this->expectException(\GuzzleHttp\Exception\ClientException::class);
    }

}
