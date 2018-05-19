<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creacion de usuarios

        $user_1 = User::create([
            'name' => 'Hacho Kuszniruk',
            'email' => 'hacho_k@outlook.com',
            'password' => bcrypt('123123'),
            'imagen' => 'usuario_1499775381.jpg'
        ]);

        $user_2 = User::create([
            'name' => 'Juan Pablo Cáceres',
            'email' => 'jpcaceres.nea@gmail.com',
            'password' => bcrypt('123123'),
            'imagen' => 'usuario_1499215225.jpg'
        ]);
    }
}
