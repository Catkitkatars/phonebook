<?php

namespace Database\Factories;

use App\Models\Phonebook;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Phonebook>
 */
class PhonebookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Phonebook::class;


    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email,
            'phone' => $this->faker->e164PhoneNumber,
        ];
    }
}
