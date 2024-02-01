<?php

namespace App\Service;


use App\Http\Requests\PostRequest;
use App\Models\Posts;
use Illuminate\Database\Eloquent\Collection;

interface PostsService{
    public function getAllPosts():Collection;
    public function storePost(PostRequest $postRequest):void;
}
