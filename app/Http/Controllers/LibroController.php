<?php

namespace App\Http\Controllers;


use App\Models\Libro;
use App\Models\Genero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LibroController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except(['all']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Auth::user()->libros;
        //$libros= Libro::with('generos')->get();
        return view('/libros.indexLibros', compact('libros'));
    }

    public function all()
    {
        $libros= Libro::with('generos','user')->get();
        //$libros = Libro::all();
        return view('/libros.listaLibros', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generos = Genero::all();
        return view('/libros.formLibros', compact('generos'));
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
            'genero_id'=> 'required', //excepción
            'puntaje'=> 'required', //excepción
            'comentario' => 'required'
        ]);

        $request->merge(['user_id'=> Auth::id()]);
        $libro = Libro::create($request->all());

        $libro->generos()->attach($request->genero_id);

        /*$libro = Libro::create([
            'user_id' => Auth::id(),
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'year' => $request->year,
            'genero' => $request->genero,
            'puntaje' => $request->puntaje,
            'comentario' => $request->comentario
        ]);*/

        //No se recomienda para actividades que no sean del usuario, ejemp: admon.
        /*$libro = new Libro();
        $libro->user_id = Auth::id();
        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->year = $request->year;
        $libro->genero = $request->genero;
        $libro->puntaje = $request->puntaje;
        $libro->comentario = $request->comentario;

        $libro->save();*/

        //$user  = Auth::user();
        //$user->libros()->save($libro);

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
        $generos = Genero::all();
        return view('/libros.formEdit', compact('libro', 'generos'));
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
            'genero_id'=> 'required', //excepción
            'puntaje'=> 'required', //excepción
            'comentario' => 'required'
        ]);

        /*$libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->year = $request->year;
        $libro->genero = $request->genero;
        $libro->puntaje = $request->puntaje;
        $libro->comentario = $request->comentario;

        $libro->save();*/

        Libro::where('id', $libro->id)->update($request->except(['_token', '_method', 'genero_id']));

        $libro->generos()->sync($request->genero_id);

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
