<?php

namespace App\Http\Controllers;

use App\User;
use App\Vino;
use App\Bodega;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

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
        $bodega->informacion = request('informacion');
        $bodega->restaurante = request('restaurante');
        $bodega->hotel = request('hotel');

        $bodega->save();

        return redirect('/bodegas');
    }

    public function edit($id){
        $bodega = Bodega::find($id);
        return view('editBodega',['bodega' => $bodega]);
    }

    public function update(Request $request, $id)
    {
        $bodega = Bodega::find($id);

        $bodega->nombre = request('nombre');
        $bodega->direccion = request('direccion');
        $bodega->email = request('email');
        $bodega->telefono = request('telefono');
        $bodega->contacto = request('contacto');
        $bodega->añoFundacion = request('añoFundacion');
        $bodega->informacion = request('informacion');
        $bodega->restaurante = request('restaurante');
        $bodega->hotel = request('hotel');

        $bodega->save();

        return redirect('/bodegas/' . $bodega->id);
    }

    public function destroy($id)
    {
        $bodega = Bodega::find($id);
        $bodega->delete();

        return redirect('/bodegas');
    }
}
