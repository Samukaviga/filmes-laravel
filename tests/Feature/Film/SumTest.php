<?php

it('Should expect sum between one end ten', function(){

$result = 1 + 2;

expect($result)->toBeBetween(1,10);


});

it('Should expect sum equal', function(){

$result = 1 + 2;

expect($result)->toBe(3);


});

it('Shold assert of the same numbers', function (){

    $result = 1 + 2;

    $this->assertSame(3, $result);

});

it('Shold the numbers be equals', function (){

    $result = 1 + 2;

    $this->assertEquals(3, $result);

});

it('Shold not have string', function (){

    $result = 1 + 2;

    expect($result)->toBe(3)->not->toBeString()->not->toBe(4);

});

it('Shold not have other', function (){

   // expect(3)->toBe(3);
    
    expect('3')->not->toBe(3); 

});