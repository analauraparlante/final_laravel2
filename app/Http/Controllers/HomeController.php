<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Usuario;
use App\Models\Area;
use App\Models\Oferta;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        return view('/ofertas/panel');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function home()
    {
        $ofertas = Oferta::with(['area'])->get();

        return view('ofertas/index', [
            'ofertas' => $ofertas
        ]);
    }

    public function index()
    {
        $ofertas = Oferta::with(['area'])->get();
        return view('/ofertas/index', [
            'ofertas' => $ofertas
        ]);
    }

    public function panel()
    {
        return view('/ofertas/panel');
    }

    public function admin()
    { return view('ofertas/panel'); }


}
