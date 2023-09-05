<?php

namespace Tests\Unit;
use App\Models\User;
use Tests\TestCase;
//use App\User;

//user class is not fouund



class UserTest extends TestCase
{

    public function test_login_form():void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_register_form():void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

//     public function test_delete_user()
//     {
//         $user = User::factory()->count(1)->make();

//         $user = User::first();

//         if($user){
//             $user->delete();   
//         }
//         $this->assertTure(true);
//     }
// }
}
