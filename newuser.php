<?php
/**
 * Created by PhpStorm.
 * User: macbookair
 * Date: 06.05.2021
 * Time: 23:42
 */

use App\Models\User;
use App\Models\Post;

use Illuminate\Support\Facades\DB;


echo "hi!";
$name = $_POST['name'];
echo $name;
$email = $_POST['email'];
echo $email;
$password = $_POST['password'];
echo $password;

//$user = new User(array('name' => $name, 'email' => $email, 'password' => $password));

//$user = new User();
//$user->name=$name;
//$user->email=$email;
//$user->password=$password;
//echo 'ok1';
//
//$u = Post::where('id', 1)->first();
//echo '<br>'.$u->body.'<br>';
//
//echo '<br>ok2';
//
//User::create(array('name' => $name, 'email' => $email, 'password' => $password));

$users = DB::table('users')->get();



echo 'ok';