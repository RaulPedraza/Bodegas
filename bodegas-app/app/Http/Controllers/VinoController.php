<?php

namespace App\Http\Controllers;

use App\Vino;
use App\Bodega;
use App\User;
use Illuminate\Http\Request;

class VinoController extends Controller
{
    public function show($idBodega,$idVino){
        $vino = Vino::find($idVino);
        $bodega = Bodega::find($idBodega);
        return view('vino', ['vino' => $vino, 'bodega' => $bodega]);
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

    public function edit($idBodega,$idVino){
        $vino = Vino::find($idVino);
        $bodega = Bodega::find($idBodega);
        return view('editVino',['vino' => $vino, 'bodega' => $bodega]);
    }

    public function update(Request $request,$idBodega, $idVino)
    {
        $vino = Vino::find($idVino);

        $vino->nombre = request('nombre');
        $vino->descripcion = request('descripcion');
        $vino->año = request('año');
        $vino->alcohol = request('alcohol');
        $vino->tipo = request('tipo');
        $vino->bodega_id = request('bodega_id');

        $vino->save();

        return redirect('/bodegas/' . $vino->bodega_id . '/vino/' . $vino->id);
    }

    public function destroy($idBodega,$idVino)
    {
        $vino = Vino::find($idVino);
        $vino->delete();

        return redirect('/bodegas/' . $idBodega);
    }
}
