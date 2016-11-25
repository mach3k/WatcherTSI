<?php

use Illuminate\Database\Seeder;

class RecursoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //1
        $registro = new \App\Recurso();
		$registro->nome = 'Estacionamento';
		$registro->pontuacaoMin = 0;
		$registro->save();
       
       //2
        $registro = new \App\Recurso();
		$registro->nome = 'Entrada sala de aula 1';
		$registro->pontuacaoMin = 0;
		$registro->save();
       
       //3
        $registro = new \App\Recurso();
		$registro->nome = 'Saída sala de aula 1';
		$registro->pontuacaoMin = 0;
		$registro->save();
       
       //4
        $registro = new \App\Recurso();
		$registro->nome = 'Entrada laboratório A';
		$registro->pontuacaoMin = 15;
		$registro->save();
       
       //5
        $registro = new \App\Recurso();
		$registro->nome = 'Saída laboratório A';
		$registro->pontuacaoMin = 0;
		$registro->save();
      
       //6
        $registro = new \App\Recurso();
		$registro->nome = 'Servidor de impressão';
		$registro->pontuacaoMin = 200;
		$registro->save();
       
       //7
        $registro = new \App\Recurso();
		$registro->nome = 'Cozinha do refeitório';
		$registro->pontuacaoMin = 150;
		$registro->save();
       
       //8
        $registro = new \App\Recurso();
		$registro->nome = 'Gaveta da mesa do diretor';
		$registro->pontuacaoMin = 5000;
		$registro->save();
    }
}