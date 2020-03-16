<?php

use Illuminate\Database\Seeder;

class EquipoSeeder extends Seeder
{
    
    public function run()
    {
        factory(App\Models\Equipo::class,30)->create();
    }
}
