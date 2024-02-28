<?php

namespace App\Http\Controllers\Api\Web;

use App\Models\Tag;
use App\Http\Resources\TagResource;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function show($slug)
    {
        $tags = Tag::with('user', 'kategoriberita', 'tags')->where('slug', $slug)->first();

        //return with Api Resource
        return new TagResource(true, 'List Data slides', $tags);
    }
}


