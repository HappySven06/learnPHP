<?php
namespace App\Controllers;

use App\Models\Post;
use App\Models\User;

class PublicController {
    public function index(){
        $posts = Post::all();
        include 'views/index.php';
    }

    public function us(){
        $posts = Post::all();
        include 'views/us.php';
    }
}