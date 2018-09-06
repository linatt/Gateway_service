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


  public function sendRequestToRegistry(Request $request)
{

$result = 0;
$token = $request->get('token');
$requestedService = 'A-Service';

$client = new Client(array( 'curl' => array( CURLOPT_SSL_VERIFYPEER => false))); //GuzzleHttp\Client

if (!is_null($token)) {

$serviceLocation = $client->get('https://registrydb.homestead/api/services/' . $requestedService)->getBody()->read(256);
$result = $client->post('https://' . $serviceLocation . '/api/toB', ['json' => ['token' => $token]])->getBody()->read(128);

}

return array($result);
}

public function sendPasetoRequestToRegistry(Request $request)
{

$result = 0;
$paseto_token = $request->get('paseto_token');
$requestedService = 'A-Service';

$client = new Client(array( 'curl' => array( CURLOPT_SSL_VERIFYPEER => false))); //GuzzleHttp\Client


if (!is_null($paseto_token)) {

  $headers = [
    'Authorization' => 'Bearer ' . $paseto_token,
    'Accept'        => 'application/json',
];

$serviceLocation = $client->get('https://registrydb.homestead/api/services/' . $requestedService)->getBody()->read(256);
$result = $client->post('https://' . $serviceLocation . '/paseto_api/toB', [
        'headers' => $headers
    ])->getBody()->read(128);

}

return array($result);
}
}
