<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {

      $response = $this->call('GET', '/sendrequest');
  //    $this->assertEquals(200, $response->status());
//  $client = new Client();
//  $result = $client->get('https://gateway.homestead/sendrequest')->getBody()->read(128);
//  echo $response;
        $A =$response[0]
        echo $A;
    //  $this->assertEquals('hallo', $response->getBody()->read(10));
      //$this->assertTrue(true);
      // $response2 = $this->call('GET', '/sendrequest');
      // $this->assertEquals(200, $response2->status());
      // $this->assertEquals(hilfe, $response2);
    }

}
