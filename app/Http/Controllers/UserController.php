<?php

namespace App\Http\Controllers;
use Auth;
use App\UserData;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Middleware
    public function __construct()
    {
        $this->middleware('role:user');
    }

    public function index()
    {
        $datas = UserData::where('user_id', Auth::id())->get();

        return view('user.user-home', compact('datas'));
    }
}
