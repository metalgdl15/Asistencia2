<?php

use Illuminate\Database\Seeder;

class alumnoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Alumno::class, 80)->create();
    }
}
