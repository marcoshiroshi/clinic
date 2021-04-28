<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DoctorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doctor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ufs = ['DF', 'GO', 'SP', 'MG', 'RJ', 'SC', 'RS', 'MS', 'MT'];
        $uf = array_rand($ufs, 1);

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'telephone' => $this->faker->phoneNumber,
            'birth' => $this->faker->date($format = 'd-m-Y', $max = 'now'), // '1979-06-09'
            'uf' => $ufs[$uf],
            'crm' => $this->faker->numberBetween($min = 1000, $max = 50000) . '-' . $ufs[$uf],
        ];
    }

}
