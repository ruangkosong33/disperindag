<?php

namespace App\Http\Controllers\Article;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post=Post::with(['category', 'user'])->orderBy('id')->get();

        return view('layouts.admin.pages.post.index-post', ['post'=>$post]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::orderBy('id')->get();

        return view('layouts.admin.pages.post.create-post', ['category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'nullable|mimes:jpeg,jpg,png|max:5000',
            'date'=>'date_format:d-m-Y',
        ]);

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-post', $images);
        }

        $post=Post::create([
            'title'=>$request->title,
            'category_id'=>$request->category_id,
            'description'=>$request->description,
            'date'=>$request->date,
            'image'=>$images,
            'status'=>$request->status,
            'user_id'=>Auth::user('id'),
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $category=Category::orderBy('id')->get();

        return view('layouts.admin.pages.post.edit-post', ['post'=>$post, 'category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'nullable|mimes:jpeg,jpg,png|max:5000',
            'date'=>'nullable|date_format:d-m-Y',
        ]);

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-post', $images);
        }
        else{
            unset($post['image']);
        }

        $post->update([
            'title'=>$request->title,
            'category_id'=>$request->category_id,
            'description'=>$request->description,
            'date'=>$request->date,
            'image'=>$images,
            'status'=>$request->status,
            'user_id'=>Auth::user('id'),
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post=Post::where('id', $post->id);

        $post->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('post.index');
    }
}
