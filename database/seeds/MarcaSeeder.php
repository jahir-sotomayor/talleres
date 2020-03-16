<?php

use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    
    public function run()
    {
        factory(App\Models\Marca::class,5)->create();
    }
}
