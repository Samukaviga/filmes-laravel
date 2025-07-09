<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\postJson;


it('should auth user', function () {
    // Cria o usuário com senha explícita para garantir o login
    /*$user = User::factory()->create([
        'password' => bcrypt('password123')
    ]);*/

    $user = User::factory()->create([   
        'password' => bcrypt('senha123')
    ]);

     $data = [
        'email' => $user->email,
        'password' => 'senha1222' // Envia a senha em texto puro
    ];

    assertDatabaseCount('users', 1);

    postJson('login', $data)->assertStatus(302);

});