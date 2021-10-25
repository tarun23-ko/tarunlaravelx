<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class custom_auth extends Controller
{

public function login(){

    return view('auth.login_view');
}
public function registration(){
    echo "Registration Page";
    return view('auth.register');
}

public function store_register(Request $request){

    $us=new User();
    $us->name = $request->name;
    $us->email = $request->email;
    $us->password = Hash::make($request->password);
    $us->save();
    $notification = array(

        "Msg" => "Registration Sucessfull"


    );
    return redirect()->route('registration')->with($notification);
}



}
