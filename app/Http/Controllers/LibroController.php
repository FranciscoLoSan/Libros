<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $libros = Libro::get();
        return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libros.form'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $libros = Libro::create($request->all());

        $libros = Libro::get();
        return view('libros.index', ['libros' => $libros]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
        $libro = Libro::findOrFail($id);
        return view('libros.show', compact('libro')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.form', compact('libro')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $libro = Libro::findOrFail($id);
        $libro->fill($request->all());
        $libro->save();
        $libros = Libro::get();
        return view('libros.index', ['libros' => $libros]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $libro = Libro::destroy($id);
        $libros = Libro::get();
        return view('libros.index', ['libros' => $libros]);
    }

    
    public function search(Request $request)
    {
        $libros = Libro::where('titulo', 'like', "{$request->search}%")->get();
        return view('libros.index', ['libros' => $libros]);

    }
}
