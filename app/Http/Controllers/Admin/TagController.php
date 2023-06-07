<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Http\Traits\ImageTrait;

class TagController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return $tags;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | unique:tags| string | min:3',
            'photo' => 'required'
        ]);

        $this->storeImage($request->file('photo'), 'tags');

        Tag::create([
            'name' => $request->name,
            'photo' => $this->select_imageName($request->file('photo'))
        ]);


        return redirect()->route('admin.tags');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::where('id', $id)->first();
        return view('admin.updateTag', ['tag' => $tag]);
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
        $tag = $tag = Tag::where('id', $id)->first();
        if($request->name == $tag->name){
            $request->validate([
                'photo' => 'required'
            ]);
        }
        else{
            if($request->photo == null){
                $request->validate([
                    'name' => 'required | unique:tags| string | min:3',
              ] );

                $tag->Update(['name' => $request->name]);
            }
            else{

                $request->validate([
                    'name' => 'required | unique:tags| string | min:3',
                    'photo' => 'required'
                ]);
                $this->storeImage($request->file('photo'), 'tags');

                $tag->Update(['name' => $request->name,
                            'photo' => $this->select_imageName($request->file('photo'))]);
            }
        }

        return redirect()->route('admin.tags');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
