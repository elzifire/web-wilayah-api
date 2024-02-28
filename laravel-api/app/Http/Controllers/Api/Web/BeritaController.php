<?php

namespace App\Http\Controllers\Api\Web;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BeritaResource;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
{    

    public function index()
    {
        $beritas = Berita::with('user', 'kategoriberita', 'tags')->when(request()->q, function($beritas) {
            $beritas = $beritas->where('judul', 'like', '%'. request()->q . '%');
        })->latest()->paginate(6);

        //return with Api Resource
        return new BeritaResource(true, 'List Data Berita', $beritas);
    }
    
    public function show($slug)
    {
        $berita = Berita::with('user', 'kategoriberita', 'tags')->where('slug', $slug)->first();

        if($berita) {
            //return with Api Resource
            return new BeritaResource(true, 'Detail Data Berita', $berita);
        }

        //return with Api Resource
        return new BeritaResource(true, 'Detail Data Berita Tidak Ditemukan!', null);

    }
    
    public function beritaBeranda()
    {
        $beritas = Berita::with('user', 'kategoriberita', 'tags')->take(5)->latest()->get();

        //return with Api Resource
        return new BeritaResource(true, 'List Data Berita Beranda', $beritas);
    }

}