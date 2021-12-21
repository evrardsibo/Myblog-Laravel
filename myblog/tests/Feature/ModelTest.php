<?php

namespace Tests\Feature;

use Faker\Factory;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ModelTest extends TestCase
{
    use RefreshDatabase;
    public function testValidRegister()
    {
        $faker = Factory::create();
        $email = $faker->unique()->email;
        $count = User::count();

       $reponse = $this->post('/register',[

            'email' => $email,
            'name' => 'Evrard',
            'password' => 'namaki',
            'password_confirmation' => 'namaki'

        ]);

        $countUser = User::count();
        $this->assertNotEquals($count ,$countUser);
    }

    public function testInvalidRegister()
    {
        $reponse = $this->post([

            'email' => 'van@van.bi',
            'name' => 'Evrard',
            'password' => 'namaki',
            'password_confirmation' => 'namaki'
        ]);
        dd(session('errors'));
        $reponse->assertSessionHasErrors();
    }
}
