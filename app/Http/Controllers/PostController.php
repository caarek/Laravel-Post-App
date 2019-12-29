<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function new() {

        return view('post.new');
    }

    public function add() {

        $id = DB::table('posts')->insertGetId([
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'content' => $_POST['content'],
            'image' => 'null'
        ]);

        return redirect()->route('post.show', ['id' => $id]);
    }

    public function remove($id) {

        DB::table('posts')->where('id', $id)->delete();

        return redirect('/');
    }

    public function show($id) {

        $postData = $this->getPost($id);

        return view('post.post', ['postData' => $postData]);
    }

    public function getPost($id) {

        return DB::table('posts')->where('id', $id)->first();
    }

    public function getPosts() {

        return DB::table('posts')->orderBy('id', 'desc')->get();
    }
}
