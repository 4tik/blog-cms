<?php

namespace App\Service\Impl;

use App\Http\Requests\PostRequest;
use App\Models\Posts;
use App\Service\PostsService;
use Illuminate\Database\Eloquent\Collection;
class PostsServiceImpl implements PostsService{

    public function getAllPosts():Collection
    {
        return Posts::all();
    }
    public function storePost(PostRequest $postRequest):void
    {
        $post = new Posts();
        $post->title = $postRequest->input('title');
        $post->description = $postRequest->input('description');
        $post->category = $postRequest->input('category');
        $post->save();
    }
}
