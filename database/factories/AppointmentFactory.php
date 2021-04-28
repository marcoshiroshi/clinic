<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\Status;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date($format = 'd-m-Y', $max = 'now'), // '1979-06-09'
            'comments' => $this->faker->realText($maxNbChars = 50),
            'status_id' => Status::all()->random()->id,
            'patient_id' => Patient::all()->random()->id,
            'doctor_id' => Doctor::all()->random()->id,
        ];
    }

}
