<?php

namespace App\Http\Controllers;

use App\Vino;
use App\Bodega;
use App\User;
use Illuminate\Http\Request;

class VinoController extends Controller
{
    public function show($idVino){
        $vino = Vino::find($idVino);
        return view('vino', ['vino' => $vino]);
    }

    public function create($id)
    {
        $bodega = Bodega::find($id);
        return view('formuVinos',['bodega' => $bodega]);
    }

    public function store(Request $request)
    {
        $vino = new Vino();

        $vino->nombre = request('nombre');
        $vino->descripcion = request('descripcion');
        $vino->año = request('año');
        $vino->alcohol = request('alcohol');
        $vino->tipo = request('tipo');
        $vino->bodega_id = request('bodega_id');

        $vino->save();

        return redirect('/bodegas/' . $vino->bodega_id);
    }
}
