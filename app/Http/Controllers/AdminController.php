<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     // Middleware
     public function __construct()
     {
         $this->middleware('role:superadministrator');
     }
    public function index()
    {
        return view('admin-home');
    }
}
