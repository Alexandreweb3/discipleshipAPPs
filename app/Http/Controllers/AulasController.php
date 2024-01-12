<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Nesta etapa a proposta é incluir todas as variavéis que controlaram a páginas das aulas

class AulasController extends Controller
{
  public function aulas()
  {
    return view('aulas');
  }
}
