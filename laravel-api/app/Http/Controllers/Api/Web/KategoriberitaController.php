<?php

namespace App\Http\Controllers\Api\Web;

use App\Http\Controllers\Controller;
use App\Http\Resources\KategoriberitaResource;
use App\Models\Kategoriberita;

class KategoriberitaController extends Controller
{
    public function index()
    {
        $kategoriberitas = Kategoriberita::latest()->paginate(10);

        //return with Api Resource
        return new KategoriberitaResource(true, 'List Data Kategori Berita', $kategoriberitas);
    }
    
    public function show($slug)
    {
        $kategoriberita = Kategoriberita::with('beritas.tags', 'beritas.kategoriberita')->where('slug', $slug)->first();

        if($kategoriberita) {
            //return with Api Resource
            return new KategoriberitaResource(true, 'List Data Berita berdasar Kategori', $kategoriberita);
        }

        //return with Api Resource
        return new KategoriberitaResource(false, 'Data Kategori Berita Tidak Ditemukan!', null);
    }

    public function kategoriberitaSidebar()
    {
        $kategoriberitas = Kategoriberita::orderBy('kategori', 'ASC')->get();

        //return with Api Resource
        return new KategoriberitaResource(true, 'List Data Kategori Berita Sidebar', $kategoriberitas);
    }
}