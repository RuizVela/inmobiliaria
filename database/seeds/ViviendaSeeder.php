<?php

use Illuminate\Database\Seeder;

class ViviendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\vivienda::class,30)->create();
    }
}
