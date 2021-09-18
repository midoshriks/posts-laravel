<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $posts = Post::all();
        // $posts = DB::select("SELECT * FROM posts");
        // return Post::where('title','post tow')->get();
        // $posts = Post::orderby('title','desc')->take(1)->get();

        $posts = Post::orderby('id', 'desc')->paginate(10);
        // $posts = Post::orderby('title','desc')->get();
        return view('posts.index')->with('posts', $posts);

        // $this->date['posts'] = Post::all();
        // return view('posts.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|min:3',
            'email' => 'required|email',
            'body' => 'required|string',
            'cover_image' => 'image|nullable|max:1999',

        ]);

        // handle file uplode
        if ($request->hasFile('cover_image')) {
            // Get filenaem with the extenstion
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extenstion = $request->file('cover_image')->getClientOriginalExtension();
            // File name store
            $fileNameToStore = $filename . '_' . time() . '.' . $extenstion;
            // Uplode image
            $path = $request->file('cover_image')->storeAs('public/cover_image', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        // Craete Post in database
        $post = new Post;
        $post->title = $request->input('title');
        $post->email = $request->input('email');
        $post->body = $request->input('body');
        $post->cover_image = $fileNameToStore;
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/posts')->with('success', 'Post Cerated');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        // Chekc for correct user
        if (auth()->user()->id !== $post->user_id) {
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }
        return view('posts.edit')->with('post', $post);
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
        $this->validate($request, [
            'title' => 'required|string|min:3',
            'email' => 'required|email',
            'body' => 'required|string',

        ]);

        // handle file uplode
        if ($request->hasFile('cover_image')) {
            // Get filenaem with the extenstion
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extenstion = $request->file('cover_image')->getClientOriginalExtension();
            // File name store
            $fileNameToStore = $filename . '_' . time() . '.' . $extenstion;
            // Uplode image
            $path = $request->file('cover_image')->storeAs('public/cover_image', $fileNameToStore);
        }

        // Craete Post in database
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->email = $request->input('email');
        $post->body = $request->input('body');
        if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/posts')->with('success', 'Post Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        // Chekc for correct user
        if (auth()->user()->id !== $post->user_id) {
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

        // Chekc is img in file
        if($post->cover_image != 'noimage.jpg'){
            // delete is img in file
            Storage::delete('public/cover_image/'.$post->cover_image);


        }

        $post->delete();
        return redirect('/posts')->with('success', 'Post Delete Post');
    }
}
