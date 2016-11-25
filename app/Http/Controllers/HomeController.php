<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Recurso;

class HomeController extends Controller
{
    public function index()
    {
       $title = 'Início';
       
       $qtdUsers = User::all()->count();
       $qtdRecursos = Recurso::all()->count();
       
       $users = User::all();
       $recursos = Recurso::all();
       
       return view('home')
          ->with('qtdUsers', $qtdUsers)
          ->with('qtdRecursos', $qtdRecursos)
          ->with('usuarios', $users)
          ->with('recursos', $recursos)
          ->withTitle($title);
    }
}
