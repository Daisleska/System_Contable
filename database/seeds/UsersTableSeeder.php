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
        \DB::table('users')->insert([
       		'name' => 'Hector hernandez',
       		'email' => 'hectorher149@gmail.com',
       		'password' => bcrypt('123456'),
          'user_type' => 'Admin',
          'Empresa' =>'EICHE',
          'avatar' => '1_1584161024.jpg'
       	]);    
    }
}
