<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(TitulosTableSeeder::class);
         $this->call(TituloUserSeeder::class);
         $this->call(RecursoTableSeeder::class);
         $this->call(RestricaoTableSeeder::class);
    }
}
