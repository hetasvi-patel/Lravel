<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hospital>
 */
class HospitalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        /*
            $table->string("name");
            $table->string("mobile");
            $table->string("disease");
            $table->string("medicines");


        */
        return [
            'name' => fake()->name(),
            'mobile' =>fake()->phoneNumber(),
            'disease' =>fake()->sentences(3 ,true),
            'medicines' => fake()->sentences(5 ,true),
        ];
    }
}
