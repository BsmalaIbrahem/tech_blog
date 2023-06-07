<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Traits\ImageTrait;
use App\Models\Post;

class PostController extends Controller
{
    use ImageTrait;
    private $tag;

    public function __construct(){
        $this->tag = new TagController();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('favourite')->latest()->get();
        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addPost', ['tags' => $this->tag->index()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $photo = null;
        if($request->photo){
            $this->storeImage($request->file('photo'), 'posts');
            $photo = $this->select_imageName($request->file('photo'));
        }


        Post::create(
            array_merge($request->all(),
            ['photo' => $photo, 'admin_id' => auth()->guard('admin')->user()->id])
        );

        return redirect()->route('admin.posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('id', $id)->get();
        return $post;
    }

    public function show_By_tag($tag_id){
        $posts = Post::where('tag_id', $tag_id)->get();
        return $posts;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show_adminPosts(){
        $posts = Post::where('admin_id', auth()->guard('admin')->user()->id)->get();
        return view('showPosts',['posts' => $posts,'admin' => true ]);
     }

    public function edit($id)
    {
        $post = Post::where('id', $id)->where('admin_id' , auth()->guard('admin')->user()->id)->first();
        return view('admin.updatePost', ['post'=>$post, 'tags' => $this->tag->index()]);
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
        Post::where('id', $id)->delete();
        return redirect()->route('admin.posts');
    }
}
