<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Etudiant;
use App\Models\Ville;

class EtudiantFactory extends Factory {

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'nom'       => $this->faker->name(), 
            'naissance' => $this->faker->date('Y-m-d', '2006-12-31'), 
            'email'     => $this->faker->unique()->email(), 
            'phone'     => $this->faker->unique()->numerify('###-###-####'), 
            'adresse'   => $this->faker->streetAddress(), 
            'ville_id'  => $this->faker->randomElement(Ville::pluck('id')), 
        ];
    }

}
