<?php

namespace Database\Factories;

use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Card::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'photo' => 'http://lorempixel.com/200/400/food/',
            'rol' => $this->faker->randomElement(['Programadores' ,'Modulo', 'Tipo de Error']),
            'state' => $this->faker->randomElement(['Activo' ,'Inactivo']),
        ];
    }
}
