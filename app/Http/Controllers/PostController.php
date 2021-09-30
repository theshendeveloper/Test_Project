<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class PostController extends Controller
{
    protected function uploadFile(UploadedFile $file,$path){
        $file_name = $file->hashName();
        $file->storeAs($path,$file_name);
        return $file_name;
    }

    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('welcome',compact('posts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $attributes = $request->validated();
        $attributes['banner'] = url("/uploads/banners/".$this->uploadFile($request->file('banner'),'/uploads/banners/'));
        $attributes['video'] = url("/uploads/videos/".$this->uploadFile($request->file('video'),'/uploads/videos/'));
        $attributes['slug'] = SlugService::generate($attributes['title']);

        Post::create($attributes);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

}
