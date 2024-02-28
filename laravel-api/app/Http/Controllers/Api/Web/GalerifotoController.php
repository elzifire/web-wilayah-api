<?php

namespace App\Http\Controllers\Api\Web;

use App\Models\Galerifoto;
use App\Http\Resources\GalerifotoResource;
use App\Http\Controllers\Controller;

class GalerifotoController extends Controller
{
    public function index()
    {
        $galerifotos = Galerifoto::latest()->paginate(2);

        //return with Api Resource
        return new GalerifotoResource(true, 'List Data Galerifoto', $galerifotos);
    }
    
}