<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Usuario;
use App\Models\Area;
use App\Models\Oferta;
use Illuminate\Support\Facades\Input;
use Validator;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios/index', [
            'usuarios' => $usuarios
        ]);
    }

   public function nuevoForm()
    {
        return view('usuarios/nuevo');
    }

     public function nuevo()
    {
        $input = Input::all();         

        $validator = Validator::make($input, Usuario::$rules);
      
        if($validator->fails()) {
            return redirect()
                ->route('usuarios.nuevoForm')
                ->withInput()
                ->withErrors($validator);
        }
        Usuario::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request()->get('password'))
            ]);
        return redirect()->route('usuarios.index');
}
	
	

    public function editarForm($id)
    {
        $usuario = Usuario::findOrFail($id);
        $id_admin = (object) array( '0' => 'usuario', '1' => 'admin');

        return view('usuarios/editar', compact(
            'usuario',
            'is_admin'
        ));
    }

    public function editar($id)
    {
        $input = Input::all();

        $validator = Validator::make($input, Usuario::$rulesedit);

        if($validator->fails()) {
            return redirect()
                    ->route('usuarios.editarForm', [$id])
                    ->withInput()
                    ->withErrors($validator);
        }

        $usuario = Usuario::findOrFail($id);
        $usuario->update($input);

        return redirect()
                ->route('usuarios.index');
    }

    public function eliminar($id)
    {
        Usuario::destroy($id);
        return redirect()->route('usuarios.index');
    }
}