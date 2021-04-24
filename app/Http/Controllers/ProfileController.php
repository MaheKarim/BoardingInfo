<?php

    namespace App\Http\Controllers;

    use App\User;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
   // use Illuminate\Support\Facades\Request;
    use Illuminate\Http\Request;

    class ProfileController extends Controller {
        // code start
        public function password_update() {
            $users = User::all();
            return view('backend.password_change', compact('users'));
        }

        public function update(Request $request) {

            $this->validate($request,[
                'oldpassword' => 'required',
                'password' => 'required|confirmed'
            ]);

            $hashedPassword = Auth::User()->password;
            if(Hash::check($request->oldpassword,$hashedPassword))
            {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                Auth::logout();

                return redirect()->route('login')->with('success','Password Change Succesfully!');
            } else {
                return redirect()->back()->with('errorMSG' ,  'Current Password Invalid!');
            }
        }
    }
