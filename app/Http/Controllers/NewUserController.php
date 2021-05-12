<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NewUserController extends Controller
{
    public function registerUser(){
        //echo "hi!";
        $name = $_POST['name'];
        //echo $name;
        $email = $_POST['email'];
        //echo $email;
        $password = $_POST['password'];
        //echo $password;

        $user = new User(array('name' => $name, 'email' => $email, 'password' => Hash::make($password)));
        $user->save();

        return redirect()->route('home')->with('success', 'Новий адміністратор доданий!');

//        $user = new User();
//        $user->name=$name;
//        $user->email=$email;
//        $user->password=$password;



//        return view('privacy');
        //echo 'ok1';
        //
        //$u = Post::where('id', 1)->first();
        //echo '<br>'.$u->body.'<br>';
        //
        //echo '<br>ok2';
        //
        //User::create(array('name' => $name, 'email' => $email, 'password' => $password));

       //$users = DB::table('users')->get();

       //echo $users;



        //echo 'ok';
    }
}
