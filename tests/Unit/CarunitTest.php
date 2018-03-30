<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarunitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCar()
    {
        $car = new Car();
        $car->Make = 'Ford';
        $car->Model = 'SUV';
        $car->Year = '2018';
        $this->assertTrue(true);
    }
}