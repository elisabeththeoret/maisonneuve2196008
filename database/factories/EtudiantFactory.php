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
            'adresse'   => $this->faker->streetAddress(), 
            'phone'     => $this->faker->unique()->numerify('###-###-####'), 
            'email'     => $this->faker->unique()->email(), 
            'naissance' => $this->faker->date('Y-m-d', '2006-12-31'), 
            'ville_id'  => $this->faker->randomElement(Ville::pluck('id')), 
        ];
    }

}
