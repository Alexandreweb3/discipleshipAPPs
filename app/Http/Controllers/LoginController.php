<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
  public function index()
  {
    return view('login');
  }

  public function login(Request $request)
  {
    $request->validate([
      'email' => 'required|email',
      'password' => 'required'
    ], [
      'email.required' => 'Esse campo de email é obrigatório',
      'email.email' => 'Esse campo tem que ter um email válido',
      'password.required' => 'Esse campo tem que ter um password válido',
      //'password.min' => 'Esse campo tem que ter no mínimo :min caracteres'
    ]);

    $credentials = $request->only('email', 'password');

    $authenticated = auth::attempt($credentials);
    //Log::error('Passou aqui gloria a Deus ');
    if (!$authenticated) {
      return redirect()->route('login.login')->withErrors(['error' => 'Email ou senha invalido']);
    }

    return redirect()->route('discipleship.index');
  }

  public function destroy()
  {
    auth::logout();

    return redirect()->route('login.index');
  }
}
