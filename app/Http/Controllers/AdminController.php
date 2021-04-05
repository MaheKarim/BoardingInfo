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

    public function edit_data($id)
    {
        $datas = UserData::find($id);

        return view('backend.users_data.update', compact('datas'));
    }

    public function update_data(Request $request,$id)
    {
        $datas = UserData::find($id)->update([
           'isApproved' => $request->isApproved,
        ]);

        session()->flash('success',' Request Successfully Updated!');
        return redirect()->route('admin.all_data');
    }
}
