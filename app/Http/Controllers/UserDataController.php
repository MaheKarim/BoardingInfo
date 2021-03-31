<?php

namespace App\Http\Controllers;

use App\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userdatas = new UserData();
        $userdatas->traveler_name = $request->traveler_name ;
        $userdatas->traveler_phn = $request->traveler_phn ;
        $userdatas->traveler_alt_phn = $request->traveler_alt_phn ;
        $userdatas->traveler_area = $request->traveler_area ;
        $userdatas->traveler_cottage_name = $request->traveler_cottage_name ;
        $userdatas->traveler_start_date = $request->traveler_start_date ;
        $userdatas->traveler_end_date = $request->traveler_end_date ;
        $userdatas->total_member = $request->total_member ;
        $userdatas->total_bag = $request->total_bag ;
        $userdatas->comment = $request->comment ;
        $userdatas->user_id = Auth::id() ;
        $userdatas->save();

        session()->flash('success', 'Created Successfully!');
        return redirect()->route('user.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function show(UserData $userData)
    {

      //  return view('')
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function edit(UserData $userData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserData $userData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserData $userData)
    {
        //
    }
}
