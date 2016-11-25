<?php

use Illuminate\Database\Seeder;

class TitulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //1
        $registro = new \App\Titulo();
		$registro->nome = 'Estudante';
		$registro->peso = 10;
		$registro->save();
       
       //2
        $registro = new \App\Titulo();
		$registro->nome = 'Estagiário';
		$registro->peso = 20;
		$registro->save();
       
       //3
        $registro = new \App\Titulo();
		$registro->nome = 'Professor';
		$registro->peso = 30;
		$registro->save();
       
       //4
        $registro = new \App\Titulo();
		$registro->nome = 'Coordenador';
		$registro->peso = 40;
		$registro->save();
       
       //5
        $registro = new \App\Titulo();
		$registro->nome = 'Diretor';
		$registro->peso = 50;
		$registro->save();
       
       //6
        $registro = new \App\Titulo();
		$registro->nome = 'Reitor';
		$registro->peso = 100;
		$registro->save();
       
       //7
        $registro = new \App\Titulo();
		$registro->nome = 'Cozinheira';
		$registro->peso = 30;
		$registro->save();
    }
}
