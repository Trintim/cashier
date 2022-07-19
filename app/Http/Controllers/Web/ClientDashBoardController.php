<?php

namespace App\Http\Web\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientDashBoardController extends Controller
{
    public function index()
    {
        return view('sistema.clientdashboard');
    }
    public function verify()
    {
        return view('sistema.verifyemail');
    }
    public function remember()
    {
        return view('sistema.remember');
    }
}
