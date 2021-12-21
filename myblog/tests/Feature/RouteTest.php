<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testaccessAdminGuestRole()
    {
        $reponse = $this->get('admin/articles');
        $reponse->assertRedirect('/login');
    }

    public function testAccessAdminRole()
    {
        $admin = Auth::loginUsingId(1);
        $this->actingAs($admin);
        // method pour similer la connaction
        $reponse = $this->get('/admin/articles');
        $reponse->assertStatus(200);
    }

}
