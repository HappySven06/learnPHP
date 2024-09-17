<?php
namespace App\Controllers;
class PublicController {
    public function index(){
        $posts = [
            ['title' => 'Title 1', 'body' => 'some body 1'],
            ['title' => 'Title 2', 'body' => 'some body 2'],
            ['title' => 'Title 3', 'body' => 'some body 3'],
            ['title' => 'Title 4', 'body' => 'some body 4'],
            ];
        include 'views/index.php';
    }

    public function us(){
        $posts = [
            ['title' => 'Title 5', 'body' => 'some body 5'],
            ['title' => 'Title 6', 'body' => 'some body 6'],
            ['title' => 'Title 7', 'body' => 'some body 7'],
            ['title' => 'Title 8', 'body' => 'some body 8'],
        ];
        include 'views/us.php';
    }
}