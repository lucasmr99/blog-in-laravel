<?php

namespace App\Http\Controllers\api;

use App\Post;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends ApiResponseController
{

    public function index()
    {
        $posts = Post::
        join('post_images','post_images.post_id','=','posts.id')->
        join('categories','categories.id','=','posts.category_id')->
        select('posts.*', 'categories.title as category', 'post_images.image')->
        orderBy('posts.created_at', 'desc')->paginate(10);

        return $this->successResponse($posts);
        // return  response()->json($posts);
    }

    public function show(Post $post)
    {
        $post->image;
        $post->category;

        return $this->successResponse($post);
        // return  response()->json( array( 'data' => $post, 'code' => 200, 'msj' => ''));
    }

    public function url_clean(string $url_clean)
    {
        $post = Post::where('url_clean', $url_clean)->firstOrFail();
        $post->image;
        $post->category;

        return $this->successResponse($post);
        // return  response()->json( array( 'data' => $post, 'code' => 200, 'msj' => ''));
    }

    public function category(Category $category)
    {
        $posts = Post::
        join('post_images','post_images.post_id','=','posts.id')->
        join('categories','categories.id','=','posts.category_id')->
        select('posts.*', 'categories.title as category', 'post_images.image')->
        orderBy('posts.created_at', 'desc')->
        where('categories.id', $category->id)
        ->paginate(5);

        return $this->successResponse(['posts' => $posts, 'category' => $category]);

        //return $this->successResponse(['posts' => $category->post()->paginate(5), 'category' => $category]);
    }

}
