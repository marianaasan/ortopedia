@extends('layouts.admin')
@section('content')
		
		<div class="row">
			<div class="content col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<div><strong>Datos Productos</strong></div>
			  <div class="content"> 
		
				
				<div class="form-group">
					<label>Categorias:</label>
		<input type="text" name="productos" class="form-control" value="{!!$productos[0]->productos!!}" readonly>
				
				</div>

				<div class="form-group">
					<label>Productos:</label>
				<input type="text" name="categorias" class="form-control" value="{!!$productos[0]->categorias!!}"readonly>
				</div>

				<div class="form-group">
					<label>Precio:</label>
				<input type="text" name="precio" class="form-control" value="{!!$productos[0]->precio!!}"readonly>
				</div>
				<div class="form-group">
					<label>Stock:</label>
				<input type="text" name="stock" class="form-control" value="{!!$productos[0]->stock!!}" readonly>
				</div>

				<div class="form-group">
					<a  href="#" data-toggle="modal" data-target="#modificarproductos" class="btn btn-info">Editar</a>
					<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarproductos">Eliminar</a>
					
				</div>
			  </div>					
			</div>
			
			 {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">        
            	<div class="content">         
            		<img src="#" style="width: 350px; height: 400px; border: 2px solid black">
      			</div>
      		</div>--}}
      		

			@include('productos/edit')	
			@include('productos/delete')
		</div>

@endsection

