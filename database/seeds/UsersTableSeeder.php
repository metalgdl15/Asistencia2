<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create()->each(fuction ($user){
        	$user->materias()->save(factory(App\Materia::class)->make());
        	$user->materias()->save(factory(App\Materia::class)->make());
        	$user->materias()->save(factory(App\Materia::class)->make());
        })
    }
}
