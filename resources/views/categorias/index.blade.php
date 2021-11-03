@extends('layouts.admin')
@section('content')

{{-- @include('categorias.create') --}}
<div class="right_col" role="main">
  <div class="">
      <div>

	  </div>      
      <h3>Listado de Categorias</h3>
      <div align="left">

		
		<a href="{{route('ortopedia.categorias.create')}}">
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

              		{{-- <button class="btn btn-primary btn-sm"  type="button"id="nuevocategoria"name="nuevo">Nuevo</button> --}}
       </div>
            <div class="row">  
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">                
                  <div class="x_content">                
                 
                    <table id="tablacategorias" class="table table-dark table-hover">
                        
                      <thead>

                        <tr>
                          
                          <th align="center">Categorias</th>     
                          <th align="center">Accion</th>

                         
                        </tr>
                      </thead>
                      <tbody>

	                     @foreach($categorias as  $cate)
	                     
	   						<tr>
                           
                            <td align="center">{{$cate->categoria}}</td>      
	                          <td align="center">

	                           <a href="{{route('ortopedia.categorias.show',$cate->id_categoria)}}" class="btn btn-success btn-sm"><i class="fas fa-eye" aria-hidden="true"></i></a>
	                          </td>
	                        </tr>
	                     @endforeach                                
                        
                      </tbody>
                    </table>
                  </div>
                </div>
                </div>
           
          </div>
        </div> 
        </div> 
@endsection

@section('scrypts')
	$(document).ready( function () {
    $('#tablacategorias').DataTable();
} );
@endsection
