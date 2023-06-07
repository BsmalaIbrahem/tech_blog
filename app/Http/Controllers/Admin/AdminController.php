<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;

class AdminController extends Controller
{
    private $tag;
    private $post;
    public function __construct(){
        $this->tag = new TagController();
        $this->post = new PostController();
    }


    public function index(){

        return view('admin.index',
                    [   'posts' => $this->post->index(),
                        'tags' => $this->tag->index(),
                        'admin' => true
                    ]);
    }

    public function show_posts(){
        return view('showPosts',['posts' => $this->post->index(),'admin' => true ]);
    }

    public function show_post($id){
        return view('showPostDetails',['posts' => $this->post->show($id), 'admin' => true]);
    }

    public function show_posts_ByTag($tag_id){
        return view('showPosts',['posts' => $this->post->show_By_tag($tag_id), 'admin' => true]);
    }

    public function view_tags(){
        $tags = $this->tag->index();
        return view('admin.tags', ['tags' => $tags, 'admin' => true]);
    }
}
