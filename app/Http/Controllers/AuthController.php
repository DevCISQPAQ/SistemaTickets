<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{

    public function index()
    {
        return View('auth.registro');
    }

     public function usertickets()
    {
        return View('userspanel.usertickets.index');
    }
}
