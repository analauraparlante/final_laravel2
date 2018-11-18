<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Usuario;
use App\Models\Area;
use App\Models\Oferta;
use Illuminate\Support\Facades\Input;
use Validator;

class OfertaController extends Controller
{
    public function index()
    {
        $ofertas = Oferta::with(['area'], ['usuario'])->get();

        return view('ofertas/index', [
            'ofertas' => $ofertas
        ]);
    }

   public function panel()
    {
        $ofertas = Oferta::with(['area'])->get();

        return view('/ofertas/panel', [
            'ofertas' => $ofertas
        ]);
    }

   public function nuevoForm()
    {
       $area = Area::all()->pluck('area', 'id');
        return view('ofertas/nuevo', compact(
            'area'
        ));
    }

     public function nuevo()
    {
        $input = Input::all();
        $validator = Validator::make($input, Oferta::$rules);

        if($validator->fails()) {
            return redirect()
                ->route('ofertas.nuevoForm')
                ->withInput()
                ->withErrors($validator);
        }
        Oferta::create($input);
        return redirect()->route('ofertas.index');
}
	
	
	

    public function editarForm($id)
    {
        $oferta = Oferta::findOrFail($id);
        $area = Area::all()->pluck('area', 'id');

        return view('ofertas/editar', compact(
            'oferta',
            'area'
        ));
    }

    public function veroferta($id)
    {
        $oferta = Oferta::findOrFail($id);
        $area = Area::all()->pluck('area', 'id');

        return view('ofertas/veroferta', compact(
            'oferta',
            'area'
        ));
    }

    public function editar($id)
    {
        $input = Input::all();

        $validator = Validator::make($input, Oferta::$rules);

        if($validator->fails()) {
            return redirect()
                    ->route('ofertas.editarForm', [$id])
                    ->withInput()
                    ->withErrors($validator);
        }

        $oferta = Oferta::findOrFail($id);
        $oferta->update($input);

        return redirect()
                ->route('ofertas.panel');
    }

    public function eliminar($id)
    {
        Oferta::destroy($id);
        return redirect()->route('ofertas.panel');
    }
}