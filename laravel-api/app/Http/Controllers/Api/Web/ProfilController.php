<?php

namespace App\Http\Controllers\Api\Web;

use App\Models\Profil;
use App\Http\Resources\ProfilResource;
use App\Http\Controllers\Controller;

class ProfilController extends Controller
{
    public function index()
    {
        $profils = Profil::latest()->paginate(1);

        //return with Api Resource
        return new ProfilResource(true, 'List Data agendas', $profils);
    }

    
    
}