<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorias;
use DB;


class categoriasController extends Controller
{
 public function index()  // index: Mostrar registros existentes (GET)
    {
  
        $categorias = categorias::all (); //all trae todo lo que esta cargado en la tabla//
        return view ('categorias.index')->with ('categorias', $categorias) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()  //create: Mostrar nuevos datos a crear (GET)
    {
         return view ('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  //store: Crear nuevos datos (POST)
    {
    
       request()->validate(['categoria'=>'required|string|min:4|unique:categorias']);

        //return $request->all (); //request trar todo lo que traigo del formulario//
        $categorias=new categorias();
        $categorias->categoria=$request->categoria; 
        $categorias->save();
        $categorias = categorias::all();return redirect()->route('ortopedia.categorias.index')->with('categorias', $categorias);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)  //show: Mostrar un registro (GET)
    {
        
        $categorias=categorias::findOrfail($id);
        return view ('categorias.show')->with('categorias',$categorias);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)  //edit: Mostrar un registro a modificar (GET)
    {
        
         $categorias = categorias::findOrFail($request->id_categoria);
         return view('categorias.edit')->with('categorias', $categorias);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)  //update: Modificar un registro (PUT)
    {
        
     $categorias=categorias::findOrfail($request->id_categoria);
        $categorias->categoria=$request->categoria;

        $categorias->save();
       // flash("SE HA MODIFICADO CON EXITO!!!","info");
        return redirect()->route('ortopedia.categorias.show',$request->id_categoria);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)  //destroy: Eliminar un registro (DELETE)
    {
        
        $categorias=categorias::findOrfail($id);
        $categorias->delete();
        $categorias = categorias::all ();
       
        return view ('categorias.index')->with ('categorias', $categorias) ;
    }
}


