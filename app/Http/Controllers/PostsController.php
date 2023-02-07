<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorePost;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    private $posts = [
        1 => [
            'title' => 'Intro to Laravel',
            'content' => 'This is a short intro to Laravel',
            'is_true' => true,
            'has_comment' => true
        ],
        2 => [
            'title' => 'Intro to PHP',
            'content' => 'This is a short intro to PHP',
            'is_true' => false,
            'has_comment' => false
        ],
        3 => [
            'title' => 'Intro to sql',
            'content' => 'This is a short intro to sql',
            'is_true' => true,
            'has_comment' => true
        ],
        4 => [
            'title' => 'Intro to No sql',
            'content' => 'This is a short intro to sql',
            'is_true' => true,
            'has_comment' => true
        ],
        5 => [
            'title' => 'Intro to My sql',
            'content' => 'This is a short intro to sql',
            'is_true' => true,
            'has_comment' => true
        ],
        6 => [
            'title' => 'Intro to mongo',
            'content' => 'This is a short intro to sql',
            'is_true' => true,
            'has_comment' => true
        ]
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('posts.index', ['posts' => $this->posts]);
        // return view('posts.index', ['posts' => BlogPost::orderBy('created_at','desc')->take(5)->get()]);
        return view('posts.index', ['posts' => BlogPost::all()]);
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
    public function store(StorePost $request)
    {
        // dd($request);
        $validated=$request->validated();
        // $post=new BlogPost();
        // $post->title=$validated['title'];
        // $post->content=$validated['content'];
    
        // $post->save();
        $post=BlogPost::create($validated);


        $request->session()->flash('status','The Blog Post was created');

        return redirect()->route('posts.show',['post'=>$post->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort_if(!isset($this->posts[$id]), 404);
        return view('posts.show', ['post' => $this->posts[$id]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
