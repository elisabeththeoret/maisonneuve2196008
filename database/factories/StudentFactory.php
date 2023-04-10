<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use App\Models\City;

class StudentFactory extends Factory {

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'name'      => $this->faker->name(), 
            'birthday'  => $this->faker->date('Y-m-d', '2006-12-31'), 
            'email'     => $this->faker->unique()->email(), 
            'phone'     => $this->faker->unique()->numerify('###-###-####'), 
            'address'   => $this->faker->streetAddress(), 
            'city_id'   => $this->faker->randomElement(City::pluck('id')), 
        ];
    }

}
