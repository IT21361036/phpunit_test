<?php

namespace Tests\Unit;

use Tests\TestCase;
//use App\User;

//user class is not fouund



class UserTest extends TestCase
{

    public function test_login_form(){
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_user_duplication(){
        $user3 = User::make([
            'name'=>'saara',
            'email'=>'saara@'
        ]);
        $user2 = User::make([
            'name'=>'saara',
            'email'=>'saara@'
        ]);
        $this->assertTrue($user->name != $user2->name);
    }
}

