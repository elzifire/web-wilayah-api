<?php

namespace App\Http\Controllers\Api\Web;

use App\Models\Slide;
use App\Http\Resources\SlideResource;
use App\Http\Controllers\Controller;

class SlideController extends Controller
{
    public function index()
    {
        
        $slides = Slide::where('published', '1')->get();

        //return with Api Resource
        return new SlideResource(true, 'List Data slides', $slides);
    }
}
