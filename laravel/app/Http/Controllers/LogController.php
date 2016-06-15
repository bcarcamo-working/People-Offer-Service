<?php

namespace POS\Http\Controllers;

use Illuminate\Http\Request;
use POS\Http\Requests;
use POS\Http\Requests\LoginRequest;
use Auth;
use Session;
use Redirect;
use POS\User;
use POS\Http\Controllers\Controller;

class LogController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){
            $correo =$request->input("email");

            //echo $correo;
            //$user = User::find($correo, array('email'));
            //return $user->email;

         $results = \DB::select("select role_id from users where email = '$correo'");
          foreach ($results as $result) {
            $rol = $result->role_id;
                
            }
            if($rol == 1){

              return Redirect::to('admin');
            }
            if($rol == 2){

              return Redirect::to('usuarioPremium');
            }
            if($rol == 3){

              return Redirect::to('usuarioFree');
            }
           // $users = \DB::table('users')->where('email', '=', $correo)->get();
                 //return Redirect::to('admin');

        }
        Session::flash('message-error','Error de login favor revisar sus credenciales');
        return Redirect::to('/');
    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/');
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
}
