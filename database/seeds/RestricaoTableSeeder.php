<?php

use Illuminate\Database\Seeder;

class RestricaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
   //tipo:     1=textual; 2=numerico; 3=data; 4=hora; 5=titulo
   //operador: 1=menor; 2=igual; 3=maior;
   //quando tipo for titulo, valorNumerico = titulo.id
   
    public function run()
    {
       //sala de aula
        $registro = new \App\Restricao();
		$registro->recurso_id = 2;
		$registro->atributo = 'Título de estudante';
		$registro->tipo = 5;
		$registro->operador = 3;
		$registro->valorTextual = '';
		$registro->valorNumerico = 1;
		$registro->impeditivo = 1;
		$registro->save();
       
        $registro = new \App\Restricao();
		$registro->recurso_id = 2;
		$registro->atributo = 'Hora máxima de entrada';
		$registro->tipo = 4;
		$registro->operador = 1;
		$registro->valorTextual = '19:15';
		$registro->valorNumerico = 0;
		$registro->impeditivo = 0;
		$registro->save();
       
        $registro = new \App\Restricao();
		$registro->recurso_id = 2;
		$registro->atributo = 'Hora mínima de saída';
		$registro->tipo = 4;
		$registro->operador = 3;
		$registro->valorTextual = '22:00';
		$registro->valorNumerico = 0;
		$registro->impeditivo = 0;
		$registro->save();
       //fim sala de aula
       
       //laboratório
        $registro = new \App\Restricao();
		$registro->recurso_id = 4;
		$registro->atributo = 'Título de estagiário';
		$registro->tipo = 5;
		$registro->operador = 3;
		$registro->valorTextual = '';
		$registro->valorNumerico = 2;
		$registro->impeditivo = 1;
		$registro->save();
       //fim laboratório
       
       //Equipamentos eletrônicos
        $registro = new \App\Restricao();
		$registro->recurso_id = 6;
		$registro->atributo = 'Título de estagiário';
		$registro->tipo = 5;
		$registro->operador = 3;
		$registro->valorTextual = '';
		$registro->valorNumerico = 2;
		$registro->impeditivo = 1;
		$registro->save();
       //Equipamentos eletrônicos
       
       //Cozinha do refeitório
        $registro = new \App\Restricao();
		$registro->recurso_id = 7;
		$registro->atributo = 'Título de cozinheira';
		$registro->tipo = 5;
		$registro->operador = 3;
		$registro->valorTextual = '';
		$registro->valorNumerico = 7;
		$registro->impeditivo = 1;
		$registro->save();
       
        $registro = new \App\Restricao();
		$registro->recurso_id = 7;
		$registro->atributo = 'Hora máxima de entrada';
		$registro->tipo = 4;
		$registro->operador = 1;
		$registro->valorTextual = '08:15';
		$registro->valorNumerico = 0;
		$registro->impeditivo = 0;
		$registro->save();
       
        $registro = new \App\Restricao();
		$registro->recurso_id = 7;
		$registro->atributo = 'Hora mínima de saída';
		$registro->tipo = 4;
		$registro->operador = 3;
		$registro->valorTextual = '19:50';
		$registro->valorNumerico = 0;
		$registro->impeditivo = 0;
		$registro->save();
       //Cozinha do refeitório
       
       //Gaveta da mesa do diretor
        $registro = new \App\Restricao();
		$registro->recurso_id = 8;
		$registro->atributo = 'Título de diretor';
		$registro->tipo = 5;
		$registro->operador = 3;
		$registro->valorTextual = '';
		$registro->valorNumerico = 5;
		$registro->impeditivo = 1;
		$registro->save();
       //Gaveta da mesa do diretor
    }
}