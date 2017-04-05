<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    use DatabaseTransactions;

    public function testBasicExample()
    {
        $user = factory(\App\User::class)->create([
            'name'=>'Hector Munoz',
            'email'=>'hpmunoz@pjud.cl',
        ]);

        $this->actingAs($user, 'api')
             ->visit('api/user')
             ->see('Hector Munoz')
             ->see('hpmunoz@pjud.cl');
    }
}
