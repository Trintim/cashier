<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientDashboardController extends Controller
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
