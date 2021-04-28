<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       collect([    
            'Confirmado',
            'Cancelado',
            'Agendado',
            'Pendente'
       ])->each(function($item) {
            $model = new Status();
            $model->create(['description' => $item]);
       });
        
    }
}
