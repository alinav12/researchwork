<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//    use HasFactory;
    protected $fillable = ['id', 'postBody', 'file', 'link'];

    public function render(){
        $posts = Post::all()->orderBy('created_at', 'DESC')->get();
        echo view($this->container)->with(['posts' => $posts]);
    }

//    public function __get($key){
//
//        if (isset($this->attributes[$key]))
//            return $this->attributes[$key];
//        else
//            return $this->attributes[$key . mb_strtoupper(Post::$lang)];
//
//    }
}
