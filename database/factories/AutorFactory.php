<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Autor>
 */
class AutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombres'=>$this->faker->name(),
            'apellidos'=>$this->faker->lastName(),
            'cedula'=>$this->faker->numerify('120#######'),
            'ruc'=>$this->faker->numerify('120#######001'),
            'email'=>$this->faker->companyEmail()
        ];
    }
}
