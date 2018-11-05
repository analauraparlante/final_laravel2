<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use App\Models\Libro;
use Illuminate\Support\Facades\Input;
use Validator;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::with(['genero'])->get();

        return view('libros/index', [
            'libros' => $libros
        ]);
 }

    public function nuevoForm()
    {
       $genero = Genero::all()->pluck('GENERO', 'ID_GENERO');
        return view('libros/nuevo', compact(
            'genero'
        ));
    }

    public function nuevo()
    {
        $input = Input::all();
        $validator = Validator::make($input, Libro::$rules);

        if($validator->fails()) {
            return redirect()
                ->route('libros.nuevoForm')
                ->withInput()
                ->withErrors($validator);
        }
        Libro::create($input);
        return redirect()->route('libros.index');
}
	
	
	

    public function editarForm($id)
    {
        $libro = Libro::findOrFail($id);
        $genero = Genero::all()->pluck('GENERO', 'ID_GENERO');

        return view('libros/editar', compact(
            'libro',
            'genero'
        ));
    }

    public function editar($id)
    {
        $input = Input::all();

        $validator = Validator::make($input, Libro::$rules);

        if($validator->fails()) {
            return redirect()
                    ->route('libros.editarForm', [$id])
                    ->withInput()
                    ->withErrors($validator);
        }

        $libro = Libro::findOrFail($id);
        $libro->update($input);

        return redirect()
                ->route('libros.index');
    }

    public function eliminar($id)
    {
        Libro::destroy($id);
        return redirect()->route('libros.index');
    }
}