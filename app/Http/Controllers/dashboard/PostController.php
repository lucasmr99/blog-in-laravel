<?php

namespace App\Http\Controllers\dashboard;

use App\Post;
use App\Category;
use App\PostImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'rol.admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(4);
        return view('dashboard.post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('id','title');

        return view('dashboard.post.create', ['post' => new Post(), 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostPost $request)
    {
        // echo "hello word: ".$request->input('category_id','1');
        // dd($request->all());
        // echo "hello word: ".$request->title;
        // echo "hello word: ".request('title');

      /*   $request->validate([
            'title' => 'required|min:5|max:500',
            // 'url_clean' => 'required|min:5|max:500',
            'content' => 'required|min:5',
        ]); */

        //dd($request->validated());

        echo "hola mundo: ".$request->content;

        Post::create($request->validated());

        //redirecciona hacia atras
        return back()->with('status', 'Post creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        /* $post = Post::find($id);

        if(isset($post)){
            return view('dashboard.post.show',['post' => $post]);
        } */

        //ESTA ES OTRA FORMA MAS CORTA SIN MUCHA LOGICA

        //$post = Post::findOrFail($id);

        return view('dashboard.post.show', ['post' => $post]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id','title');
        return view('dashboard.post.edit', ['post' => $post, 'categories' => $categories]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostPost $request, Post $post)
    {
        $post->update($request->validated());

        return back()->with('status', 'Post actualizdo con exito');
    }

    public function image( Request $request, Post $post)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,bmp,png|max:10240' // 10Mb
        ]);

        $filename = time() .'.'. $request->image->extension();

        $request->image->move(public_path('images'), $filename);

        PostImage::create(['image' => $filename, 'post_id' => $post->id]);
        return back()->with('status', 'imagen cargada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('status', 'Post Eliminado con exito');
    }
}
