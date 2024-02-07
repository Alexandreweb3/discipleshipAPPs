<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;
use Illuminate\Support\Facades\Log;

class DiscipleshipController extends Controller
{
  public function index()
  {
    return view('discipleship');
  }

  public function location()
  {
    return view('location');
  }
}
