<?php

namespace App\Http\Controllers;


use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LibroController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::all();
        return view('/libros.indexLibros', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/libros.formLibros');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo'=> 'required',
            'autor'=> 'required',
            'year'=> 'required',
            'genero'=> 'required', //excepción 
            'puntaje'=> 'required', //excepción
            'comentario' => 'required'
        ]);

        $libro = new Libro();
        $libro->user_id = Auth::id();
        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->year = $request->year;
        $libro->genero = $request->genero;
        $libro->puntaje = $request->puntaje;
        $libro->comentario = $request->comentario;

        $libro->save();

        return redirect('/libros');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        return view('libros.showLibro', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        return view('/libros.formEdit', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        $request->validate([
            'titulo'=> 'required',
            'autor'=> 'required',
            'year'=> 'required',
            'genero'=> 'required',
            'puntaje'=> 'required'
        ]);
        
        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->year = $request->year;
        $libro->genero = $request->genero;
        $libro->puntaje = $request->puntaje;
        $libro->comentario = $request->comentario;

        $libro->save();

        return redirect('/libros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect('/libros');
    }
}
