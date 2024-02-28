<?php

namespace App\Http\Controllers\Api\Web;

use App\Models\Halaman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\HalamanResource;
use Illuminate\Support\Facades\Validator;

class HalamanController extends Controller
{    

    public function index()
    {
        
        $halamans = Halaman::latest()->paginate(2);
        //return with Api Resource
        return new HalamanResource(true, 'List Data Halaman', $halamans);
    }
    
    public function show($slug)
    {
        $halamans = Halaman::with('user', 'kategorihalaman', 'tags')->where('slug', $slug)->first();

        if($halamans) {
            //return with Api Resource
            return new halamanResource(true, 'Detail Data Berita', $halamans);
        }

        //return with Api Resource
        return new HalamanResource(true, 'Detail Data Berita Tidak Ditemukan!', null);

    }
    

}