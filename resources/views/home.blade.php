@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Dashboard</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif

            You are logged in! <br><br><br>

            JWT: {{$token}} <br><br>
            PASETO: {{$paseto_token}} <br><br>

            @if ($token)
              <a href="/sendrequest?token={{$token}}">Send JWT-Request</a> <br>
            @endif

            @if ($paseto_token)
              <a href="/sendpasetorequest?paseto_token={{$paseto_token}}">Send PASETO-Request</a> <br>
            @endif





            <div class="row">
              <passport-clients></passport-clients>
              <passport-authorized-clients></passport-authorized-clients>
              <passport-personal-access-tokens></passport-personal-access-tokens>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
