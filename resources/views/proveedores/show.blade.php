@extends('layouts.admin')
@section('content')
	<div class="row">
			<div class="content col-lg-6 col-md-6 col-sm-6 col-xs-6" >
				<div><strong>Datos Proveedores:</strong></div>
			 <div class="content" > 
				<div class="form-group">

					<label>CUIT:</label>
					<input type="text" name="cuit" class="form-control" value="{!!$proveedores[0]->cuit!!}" readonly>
				</div>		

				<div class="form-group">
					<label>Razón Social:</label>
					<input type="text" name="razon_social" class="form-control" value="{!!$proveedores[0]->razon_social!!}" readonly>
				</div>	

				<div class="form-group">
					<label>Localidad:</label>
					<input type="text" name="nombre_localidad" class="form-control" value="{!!$proveedores[0]->nombre_localidad!!}" readonly>
				</div>	
				<div class="form-group">
					<label>Domicilio:</label>
					<input type="text" name="domicilio" class="form-control" value="{!!$proveedores[0]->domicilio!!}" readonly>
				</div>	

				<div class="form-group">
					<label>Email:</label>
					<input type="text" name="email" class="form-control" value="{!!$proveedores[0]->email!!}" readonly>
				</div>	

				<div class="form-group">
					<label>Teléfono:</label>
					<input type="number" name="telefono" class="form-control" value="{!!$proveedores[0]->telefono!!}" readonly>
				</div>	
	
				<div class="form-group">
					<a  href="#" data-toggle="modal" data-target="#modificarproveedores" class="btn btn-info">Editar</a>
					{{--<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarproveedores" disabled>Dar de Baja</a>--}}
					
				</div>
			  </div>					
			</div>
			
			 {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">        
            	<div class="content">         
            		<img src="#" style="width: 350px; height: 400px; border: 2px solid black">
      			</div>
      		</div>--}}
      		

			@include('proveedores/edit')	
			@include('proveedores/delete')
		</div>
@endsection
