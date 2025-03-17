<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Si el usuario es admin, lo redirige a la vista de admin
        if (Auth::check() && Auth::user()->role === 'admin') {
            return view('admin.index');
        }
        // Si es usuario normal, lo redirige a la vista de usuario
        return view('user.index');
    }
}

