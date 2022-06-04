<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        $userStore = new User();
        $userStore->name = strip_tags($request->input('name'));
        $userStore->email = strip_tags($request->input('email'));
        $userStore->password = strip_tags(bcrypt($request->input('password')));
        $userStore->save();//to add record in database
        //Mail::to($userStore->email)->send(new RegisterNotification());
        return redirect()->route('login.form')->with('success','Account Created Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function signup(){
        return view('signup');
    }

    public function logIn(){
        return view('login');
    }

   public function loggedin(Request $request){

        $validated = $request->validate([

            'email'=>'required',
            'password'=>'required',
        ]);

        $credentials = ($request->except('_token'));
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('success','You are logged in.');
        }
        else{
            return redirect()->route('login.form')->with('Incorrect Email or Password.');
        }
       // dd($request);
    }
}
