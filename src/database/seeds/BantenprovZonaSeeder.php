<?php

use Illuminate\Database\Seeder;

class BantenprovZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BantenprovZonaSeederMasterZona::class);
        $this->call(BantenprovZonaSeederZona::class);
    }
}
