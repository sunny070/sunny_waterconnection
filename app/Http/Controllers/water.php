<?php

namespace App\Http\Controllers;
use App\signup;

use Illuminate\Http\Request;

class water extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signin(Request $req)
    {
        signup::select('*')->where(
            [  ['email','=',$req->email],
              ['psw','=',$req->psw]])->get();
              $req->session()->put('logData',[$req->input()]);
            //   return redirect('/list');
            return redirect('/appli');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signup(Request $req)
    {
        // return $req;
        $login= new signup;
        $login->name=$req->name;
        $login->email=$req->email;
        $login->psw=$req->psw;
        $login->pswr=$req->pswr;
       $result= $login->save();
       if($result)
       {
           return redirect('signin');
       }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
