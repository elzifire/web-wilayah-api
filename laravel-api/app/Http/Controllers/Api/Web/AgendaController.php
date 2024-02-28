<?php

namespace App\Http\Controllers\Api\Web;

use App\Models\Agenda;
use App\Http\Resources\AgendaResource;
use App\Http\Controllers\Controller;

class AgendaController extends Controller
{
    public function index()
    {
        $agendas = Agenda::latest()->paginate(6);

        //return with Api Resource
        return new AgendaResource(true, 'List Data agendas', $agendas);
    }
    public function show($slug)
    {
    $agendas = Agenda::where('slug', '1')->get();

    //return with Api Resource
    }
}