<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {

      //$response = $this->call('GET', '/sendrequest');
  //    $this->assertEquals(200, $response->status());
//  $client = new Client();
//  $result = $client->get('https://gateway.homestead/sendrequest')->getBody()->read(128);
//  echo $response;
        //$A = $response[0];
      //  echo $A;
    //  $this->assertEquals('hallo', $response->getBody()->read(10));
      //$this->assertTrue(true);
       $response2 = $this->call('GET', '/sendrequest?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJsdW1lbi1qd3QiLCJzdWIiOjEsImlhdCI6MTUzNTk3MzEyMSwiZXhwIjoxNTM1OTc2NzIxfQ.mH-Wjq8x3PoDawkrIq767ze4wQPtIegWG77XrDSQ0Oc');
       $this->assertEquals(200, $response2->status());
       $this->assertEquals('["[\"Antwort vom A-Service!\",\"Antwort vom B-Service!\"]"]', $response2->getContent());
    }

}
