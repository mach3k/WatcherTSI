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
        $user = new \App\User();
		$user->name = 'Zé';
		$user->email = 'ze@gmail.com';
		$user->password = bcrypt('123456');
		$user->pontuacao = 0;
		$user->save();
       
        $user = new \App\User();
		$user->name = 'Vanessa Bonete';
		$user->email = 'vanessabonete@gmail.com';
		$user->password = bcrypt('123456');
		$user->pontuacao = 10;
		$user->save();
       
        $user = new \App\User();
		$user->name = 'Vollin Habar';
		$user->email = 'volinhabar@gmail.com';
		$user->password = bcrypt('123456');
		$user->pontuacao = 200;
		$user->save();
       
        $user = new \App\User();
		$user->name = 'Armando Woltas';
		$user->email = 'armando@gmail.com';
		$user->password = bcrypt('123456');
		$user->pontuacao = 300;
		$user->save();
       
        $user = new \App\User();
		$user->name = 'Dona Maria';
		$user->email = 'donamaria@gmail.com';
		$user->password = bcrypt('123456');
		$user->pontuacao = 80;
		$user->save();
       
        $user = new \App\User();
		$user->name = 'Adolph Vans Phuder';
		$user->email = 'adolph@gmail.com';
		$user->password = bcrypt('123456');
		$user->pontuacao = 1500;
		$user->save();
       
        $user = new \App\User();
		$user->name = 'Zeus';
		$user->email = 'zeus@gmail.com';
		$user->password = bcrypt('123456');
		$user->pontuacao = 8000;
		$user->save();
    }
}
