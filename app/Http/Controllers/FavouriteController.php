<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use Illuminate\Http\Request;
use App\Models\Post;

class FavouriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favPosts = Favourite::with('post')->where('user_id', auth()->user()->id)->get();
        return view('showFav', ['favPosts'=> $favPosts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function check($post_id){
        $post = Favourite::where('post_id', $post_id)->where('user_id', auth()->user()->id)->first();
        if(! $post)
            $this->store($post_id);
        else
            $this->destroy($post->id);
        return redirect()->route('showPosts');
    }

    public function store($post_id)
    {
        Favourite::create([
            'post_id' => $post_id,
            'user_id' => auth()->user()->id
        ]);
    }


    public function destroy($id)
    {
        Favourite::where('id',$id)->delete();
    }
}
