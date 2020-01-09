<?php

namespace App\Http\Controllers;

use App\User;
use App\Vino;
use App\Bodega;
use Illuminate\Http\Request;

class BodegaController extends Controller
{
    public function index(){
        $bodegas = Bodega::all();
        return view('bodegas',['bodegas' => $bodegas]);
    }

    public function show($id){
        $bodega = Bodega::find($id);
        $vinos = Vino::all();
        return view('bodega',['bodega' => $bodega, 'vinos' => $vinos]);
    }

    public function create()
    {
        return view('formuBodegas');
    }

    public function store(Request $request)
    {
        $bodega = new Bodega();

        $bodega->nombre = request('nombre');
        $bodega->direccion = request('direccion');
        $bodega->email = request('email');
        $bodega->telefono = request('telefono');
        $bodega->contacto = request('contacto');
        $bodega->añoFundacion = request('añoFundacion');

        $bodega->save();

        return redirect('/bodegas');
    }
}
