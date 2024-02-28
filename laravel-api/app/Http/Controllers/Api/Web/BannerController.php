<?php

namespace App\Http\Controllers\Api\Web;

use App\Models\Banner;
use App\Http\Resources\BannerResource;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    public function index()
    {
        
        $banners = Banner::where('published', '1')->get();

        //return with Api Resource
        return new BannerResource(true, 'List Data Banner', $banners);
    }
}
