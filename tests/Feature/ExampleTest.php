<?php

use function Pest\Laravel\getJson;

it('Shold return status code 200', function ()  {

  $response =  getJson('api/',
    ['Content-Type' => 'application/json']
);

$response->assertStatus(200);


});