<?php

    namespace App\Http\Controllers;

    use App\User;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Request;

    class ProfileController extends Controller {
        // code start
        public function password_update() {
            return view('backend.password_change');
        }

        public function update(Request $request ) {
            $id = Auth::user()->id;
            $db_password = Auth::user()->password;
            $old_pass = $request->old_password;
            $new_pass = $request->new_password;
            $confirm_pass = $request->confirm_password;

            if (Hash::check($db_password, $old_pass)){
                if ($new_pass === $confirm_pass) {
                    User::find($id)->update([
                        'password' => Hash::make($request->new_password)
                    ]);
                    Auth::logout();
                    return redirect()->route('login');

                }else{
                    session()->flash('error', 'New Password & Confirm Pass !match successfully');
                    return redirect()->route('admin.home');
                }
            } else{
                session()->flash('error', 'Password !changed successfully');
                return redirect()->route('admin.home');
            }


        }
    }
