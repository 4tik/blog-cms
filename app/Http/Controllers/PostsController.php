<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Service\PostsService;

class PostsController extends Controller {
    private PostsService $postService;
    public function __construct(PostsService $postService) {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->getAllPosts();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }


    public function store(PostRequest $postRequest)
    {
        try
        {
            $this->postService->storePost($postRequest);
            return redirect('/posts');
        }
        catch (\Exception $ex)
        {
            logger("error : ".$ex);
            return view('404');
        }
    }
}
