<?php

class ExampleTest extends FeatureTestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    function test_basic_example()
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
