<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;

class UserController extends Controller
{
    private $tag, $post;
    public function __construct(){
        $this->tag = new TagController();
        $this->post = new PostController();
    }
    public function index(){
        $tags = $this->tag->index();
        return view('index', ['tags' => $tags]);
    }

    public function show_posts(){
        return view('showPosts',['posts' => $this->post->index()]);
    }

    public function show_post($id){
        return view('showPostDetails',['posts' => $this->post->show($id)]);
    }

    public function show_posts_ByTag($tag_id){
        return view('showPosts',['posts' => $this->post->show_By_tag($tag_id)]);
    }
}

