<?php

namespace App\Http\Controllers\Api\Web;

use App\Models\Galerivideo;
use App\Http\Resources\GalerivideoResource;
use App\Http\Controllers\Controller;

class GalerivideoController extends Controller
{
    public function index()
    {
        $videos = Galerivideo::latest()->paginate(2);

        //return with Api Resource
        return new GalerivideoResource(true, 'List Data Galerivideo', $videos);
    }
    
}