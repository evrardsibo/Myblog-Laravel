<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DataTest extends TestCase
{
    use RefreshDatabase;
    public function testValidRegister()
    {
        
       
        $count = User::count();

       $reponse = $this->post('/register',[

            'email' => 'evr@evr.si',
            'name' => 'Evrard',
            'password' => 'namaki',
            

        ]);

        $countUser = User::count();
        $this->assertNotEquals($count ,$countUser);
    }
}
