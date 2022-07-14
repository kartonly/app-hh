<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Faker\Generator as Faker;

class AdsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    use WithFaker;


    public function testOne()
    {
        $this->call('GET', 'one/1');

        $this->assertTrue(true);
    }

    public function testCreate()
    {
        $array = [];
        for($i = 0; $i <= 2; $i++){
            array_push($array, $this->faker->url());
        }
        $this->call('POST', 'create', array(
            'name' => $this->faker->name(),
            'about' => $this->faker->text(),
            'price' => $this->faker->randomNumber(),
            'link'=> $array
        ));

        $this->assertTrue(true);
    }
}
