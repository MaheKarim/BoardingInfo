<?php

namespace App\Http\Controllers;

use App\UserData;
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

    public function show_data()
    {
        $datas = UserData::all();
        return view('backend.users_data.index', compact('datas'));
    }
}
