<?php

namespace App\Http\Controllers\Api\Web;

use App\Models\Albumfoto;
use App\Http\Resources\AlbumfotoResource;
use App\Http\Controllers\Controller;

class AlbumfotoController extends Controller
{
    public function index()
    {
        $albumfotos = Albumfoto::latest()->paginate(2);

        //return with Api Resource
        return new AlbumfotoResource(true, 'List Data Albumfoto', $albumfotos);
    }
    
}