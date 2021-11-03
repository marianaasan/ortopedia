<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proveedores; 
use App\localidades;
use DB;

class proveedoresController extends Controller
{
    public function index()
    {
    $proveedores=DB::table('proveedores')->select('proveedores.*','localidades.nombre_localidad as localidades')
       ->join('localidades','localidades.id_localidad','=','proveedores.id_localidad')->get();
            //return $proveedores;
        return view('proveedores.index')->with('proveedores',$proveedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
     $localidades=Localidades::all();
     return view ('proveedores.create')->with('localidades',$localidades);
         
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
        'razon_social' => 'required|string|max:50',
        'domicilio' => 'required|max:80',
      // 'cuit' => 'required|unique:proveedores,cuit|string',
        'email' => 'required|email',
    ]);
        $proveedores=new proveedores();
        $proveedores->cuit=$request->cuit;
        $proveedores->razon_social=$request->razon_social;
        $proveedores->id_localidad=$request->id_localidad;
        $proveedores->domicilio=$request->domicilio;
        $proveedores->email=$request->email;
        $proveedores->telefono=$request->telefono;
      
       //$personas->estado='A';
        $proveedores->save();
        
        return redirect()->route('ortopedia.proveedores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);
     // return $id->all();
        $proveedores=proveedores::findOrfail($id);
        $localidades=Localidades::all();
        $proveedores=DB::table('proveedores')->select('proveedores.*','localidades.nombre_localidad')
        ->join('localidades','localidades.id_localidad','=','proveedores.id_localidad')->where('proveedores.id_proveedor','=',$id)->get();         
        return view('proveedores.show')->with('proveedores',$proveedores)->with('localidades',$localidades);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $proveedores=proveedores::findOrfail($request->id_proveedor);
        $proveedores->cuit=$request->cuit;
        $proveedores->razon_social=$request->razon_social;
        $proveedores->email=$request->email;
        $proveedores->domicilio=$request->domicilio;
        $proveedores->id_localidad=$request->id_localidad;
        $proveedores->telefono=$request->telefono;

        $proveedores->save();
        return redirect()->route('ortopedia.proveedores.show',$request->id_proveedor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // return $id;

     //   $personas= personas::findOrfail($id);
       // $personas->estado = 'B';
      //  $personas->update();

      //  $personas=DB::table('personas')->select('personas.*','localidades.nombre_localidad as localidad','sexos.descripcion','tipos_documentos.sigla as sigla')
     //  ->join('localidades','localidades.id_localidad','=','personas.id_localidad')
     //  ->join('sexos','sexos.id_sexo','=','personas.id_sexo')
     //  ->join('tipos_documentos','tipos_documentos.id_tipo_documento','=','personas.id_tipo_documento')
     ////  ->where('personas.estado','=','A')
   //    ->get();
   //   return redirect()->route('escuela.personas.index')->with ('personas', $personas) ;
    }


    public function bajas()
    {
        // return 'hola';

    //    $personas=DB::table('personas')->select('personas.*','localidades.nombre_localidad as localidad','sexos.descripcion','tipos_documentos.sigla as sigla')
     //  ->join('localidades','localidades.id_localidad','=','personas.id_localidad')
    //   ->join('sexos','sexos.id_sexo','=','personas.id_sexo')
    //   ->join('tipos_documentos','tipos_documentos.id_tipo_documento','=','personas.id_tipo_documento')
    //   ->where('personas.estado','=','B')
///       ->get();
//
   //    return  view ('bajas.index')->with ('personas', $personas);
    }

    public function alta($id)
    {
        // return $id;
      //  $personas= personas::findOrfail($id);
        //$personas->estado = 'A';
     //   $personas->update();

       // $personas=DB::table('personas')->select('personas.*','localidades.nombre_localidad as localidad','sexos.descripcion','tipos_documentos.sigla as sigla')
    //   ->join('localidades','localidades.id_localidad','=','personas.id_localidad')
     //  ->join('sexos','sexos.id_sexo','=','personas.id_sexo')
     //  ->join('tipos_documentos','tipos_documentos.id_tipo_documento','=','personas.id_tipo_documento')
      // ->where('personas.estado','=','A')
     //  ->get();
    //  return redirect()->route('escuela.personas.index')->with ('personas', $personas) ;

    }
}
