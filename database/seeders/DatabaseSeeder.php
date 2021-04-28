<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Patient::factory(30)->create();
        \App\Models\Doctor::factory(30)->create();
        $this->call(StatusSeeder::class);
        \App\Models\Appointment::factory(30)->create();
        
    }
}
