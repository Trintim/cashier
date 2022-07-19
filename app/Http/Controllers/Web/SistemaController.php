<?php

namespace App\Http\Web\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SistemaController extends Controller
{
    public function index()
    {
        return view('sistema.index');
    }
    public function loginSis()
    {
        return view('sistema.login');
    }
    public function cadastro()
    {
        return view('sistema.cadastro');
    }
    public function senha()
    {
        return view('sistema.senha');
    }
}
