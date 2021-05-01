<?php

namespace App\Http\Controllers;

use App\User;
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
        $users = User::all();
        return view('admin-home', compact('users'));
    }

    public function show_data()
    {
        $users = User::all();
        $datas = UserData::all();
        return view('backend.users_data.index', compact('datas', 'users'));
    }

    public function edit_data($id)
    {
        $datas = UserData::find($id);
        $users = User::all();
        return view('backend.users_data.update', compact('datas', 'users'));
    }

    public function update_data(Request $request,$id)
    {
        $datas = UserData::find($id)->update([
           'isApproved' => $request->isApproved,
        ]);

        session()->flash('success',' Request Successfully Updated!');
        return redirect()->route('admin.all_data');
    }

    public function delete_data($id)
    {
        $datas = UserData::findOrfail($id)->delete();

        session()->flash('error',' Request Successfully Deleted!');
        return redirect()->route('admin.all_data');
    }
}
