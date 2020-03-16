<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  
    public function run()
    {
        $this->call(MarcaSeeder::class);
        $this->call(EquipoSeeder::class);
    }
}
