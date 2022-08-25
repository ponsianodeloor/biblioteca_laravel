<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function index()
    {
        $autores = Autor::orderBy('id', 'desc')->paginate();
        return view('system.autores.index', compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show($id){
        $autor = Autor::find($id);
        return view('system.autores.show', compact('autor'));
    }

    public function edit($id){
        $autor = Autor::find($id);
        return view('system.autores.edit', compact('autor'));
    }

    public function update(Request $request){
        $autor = new Autor();
        $autor->nombres = $request->nombres;
        $autor->apellidos = $request->apellidos;
        $autor->cedula = $request->cedula;
        $autor->ruc = $request->ruc;
        $autor->email = $request->email;

        $autor->save();

        return redirect()->route('autores.show', $autor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autor $autor)
    {
        //
    }
}
