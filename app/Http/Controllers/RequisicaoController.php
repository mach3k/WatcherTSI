<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Recurso;
use Illuminate\Http\Response;
use App\Historico;
use Carbon\Carbon;

class RequisicaoController extends Controller
{
   public function avaliaRequisicao(Request $request)
   {
      $user    = User::findOrFail($request->usuario);
      $recurso = Recurso::findOrFail($request->recurso);
      
//      $user    = User::findOrFail($request['usuario']);
//      $recurso = Recurso::findOrFail($request['recurso']);
      
      if($user->pontuacao < $recurso->pontuacaoMin)
      {
         $historico = new Historico;
         $historico->dataAcesso = Carbon::now();
         $historico->resumo = 'Bloqueado por pontuação';
         $historico->pontosAtuais = $user->pontuacao;
         $historico->pontosSomados = -1;
         $historico->user_id = $user->id;
         $historico->recurso_id = $recurso->id;
         $historico->save();
         
         $user->pontuacao = $user->pontuacao - 1;
         $user->save();
         
         
         return [
            "Mensagem" => "Você não tem permissão para acessar o recurso",
            "status" => 403
         ];
         
      } else {
         return [
            "Mensagem" => "Você tem permissão para acessar o recurso",
            "status" => 200
         ];
      }
   }
}
