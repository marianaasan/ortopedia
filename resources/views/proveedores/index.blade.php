@extends('layouts.admin')
@section('content')

<div class="right_col" role="main">
  <div class="">
      <div>

	  </div>        
      <h3>Listado de Proveedores</h3>
      <div align="left">
<!-- Button trigger modal -->
		{{-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalcreateProveedor">
		  Nuevo
		</button> --}} 
		<a href="{{route('ortopedia.proveedores.create')}}">
  		   <button class="btn btn-success">Nuevo</button>
        </a>
		<hr>
          @if ($errors->any())
                  <div class="alert alert-danger alert-dismissable">
                      <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;
                      </button>
                      <strong>¡Atención!</strong> 
                      <p> Error al cargar los datos </p>
                      <p><h4>Presione el boton Nuevo para verificar el error</h4></p>                    
                  </div>
           @endif
       </div>
            <div class="row">  
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">                
                  <div class="x_content">                
                    {{-- <table id="datatable-buttons" class="table table-striped table-bordered" > --}}
                    <table id="tablaProveedores" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                                       
                          <th align="center">Cuit</th>
                          <th align="center">Razón Social</th>
                          <th align="center">Localidad</th>
                          <th align="center">Domicilio</th>
                          <th align="center">Teléfono</th>
                          <th align="center">Email</th>
                          <th align="center">Estado</th>
                          <th align="center">Accion</th>
                        </tr>
                      </thead>
                      <tbody>

	           @foreach($proveedores as $proveedores)	                
	   						<tr>

                          <td align="center">{{$proveedores->cuit}}</td>
                          <td align="center">{{$proveedores->razon_social}}</td>
                          <td align="center">{{$proveedores->localidades}}</td> 
                          <td align="center">{{$proveedores->domicilio}}</td>       
                          <td align="center">{{$proveedores->telefono}}</td>  
                          <td align="center">{{$proveedores->email}}</td>                       
                          <td align="center">                        
                      <a href="{{route('ortopedia.proveedores.show',$proveedores->id_proveedor)}}" class="btn btn-success btn-sm"><i class="fas fa-eye" aria-hidden="true"></i></a>
                    
                        {{--  <a id="btn-baja" href="{{route('ortopedia.proveedores.proveedorBaja',$proveedores->id_proveedor)}}" class="btn btn-danger btn-sm "><i class="fa-angle-double-down"></i></a> --}}

	                         </td>
	               </tr>
	         @endforeach                                
                        
                      
                    </table>
                 
                </div>
              </div>
            </div> 
          </div>
  </div>
@endsection

@section('scrypts')	
	 $(document).ready( function () {
            $('#tablaProveedores').DataTable();
        } );

  $("#btn-baja").click(function(){
  var bool= confirm("Seguro de dar de baja este registro dato?");
  if(bool){
    alert("se elimino correctamente");
  }else{
    alert("cancelo la solicitud");
    exit();
  }
});
@endsection
