<?php

use Illuminate\Database\Seeder;

class TituloUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titulo_user')->insert([
           [
              'user_id' => 1,
              'titulo_id' => 1
           ],
           [
              'user_id' => 2,
              'titulo_id' => 1
           ],
           [
              'user_id' => 2,
              'titulo_id' => 2
           ],
           [
              'user_id' => 3,
              'titulo_id' => 3
           ],
           [
              'user_id' => 4,
              'titulo_id' => 4
           ],
           [
              'user_id' => 5,
              'titulo_id' => 7
           ],
           [
              'user_id' => 6,
              'titulo_id' => 5
           ],
           [
              'user_id' => 7,
              'titulo_id' => 6
           ]
        ]);
    }
}
