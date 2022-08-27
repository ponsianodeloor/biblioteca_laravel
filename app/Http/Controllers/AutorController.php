<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAutorRequest;
use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function index()
    {
        $autores = Autor::orderBy('id', 'desc')->paginate();
        return view('system.autores.index', compact('autores'));
    }

    public function create(){
        return view('system.autores.create');
    }

    public function store(StoreAutorRequest $request){
        /*
        $autor = new Autor();

        $autor->nombres = $request->nombres;
        $autor->apellidos = $request->apellidos;
        $autor->cedula = $request->cedula;
        $autor->ruc = $request->ruc;
        $autor->email = $request->email;

        $autor->save();
        */
        $autor = Autor::create($request->all());
        return redirect()->route('autores.show', $autor);
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
        $autor = Autor::findOrFail($request->id);
        $autor->nombres = $request->nombres;
        $autor->apellidos = $request->apellidos;
        $autor->cedula = $request->cedula;
        $autor->ruc = $request->ruc;
        $autor->email = $request->email;

        $autor->save();

        return redirect()->route('autores.show', $autor);
    }

    public function destroy(Request $request){
        Autor::destroy($request->id);
        return redirect()->route('autores.index');
    }
}
