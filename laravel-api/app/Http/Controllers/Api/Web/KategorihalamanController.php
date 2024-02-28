<?php

namespace App\Http\Controllers\Api\Web;

use App\Http\Controllers\Controller;
use App\Http\Resources\KategorihalamanResource;
use App\Models\Kategorihalaman;

class KategorihalamanController extends Controller
{
    public function index()
    {
        $kategorihalamans = Kategorihalaman::latest()->paginate(10);

        //return with Api Resource
        return new KategorihalamanResource(true, 'List Data Kategori Halaman', $kategorihalamans);
    }
    
    public function show($slug)
    {
        $kategorihalamans = Kategorihalaman::with('beritas.tags', 'beritas.kategoriberita')->where('slug', $slug)->first();

        if($kategorihalamans) {
            //return with Api Resource
            return new KategorihalamanResource(true, 'List Data Berita berdasar Kategori', $kategorihalamans);
        }

        //return with Api Resource
        return new KategorihalamanResource(false, 'Data Kategori Berita Tidak Ditemukan!', null);
    }

    public function kategorihalamanSidebar()
    {
        $kategorihalamans = Kategorihalaman::orderBy('kategori', 'ASC')->get();

        //return with Api Resource
        return new KategorihalamanResource(true, 'List Data Kategori Berita Sidebar', $kategorihalamans);
    }
}