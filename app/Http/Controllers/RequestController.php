<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class RequestController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
  //  $this->middleware('auth');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
  public function sendToA()
  {
    $client = new Client(array( 'curl' => array( CURLOPT_SSL_VERIFYPEER => false))); //GuzzleHttp\Client
    $result = $client->get('https://a-service.homestead/api/toB');
    return $result;
  }

  public function sendRequestToRegistry(Request $request)
{

$token = $request->get('token');
$requestedService = 'A-Service';

$client = new Client(array( 'curl' => array( CURLOPT_SSL_VERIFYPEER => false))); //GuzzleHttp\Client

$serviceLocation = $client->get('http://registrydb.homestead/api/services/' . $requestedService)->getBody()->read(256);
$result = $client->post('https://' . $serviceLocation . '/api/toB', ['json' => ['token' => $token]])->getBody()->read(128);
return array($result);
}
}
