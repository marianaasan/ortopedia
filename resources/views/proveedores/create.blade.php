@extends('layouts.admin')

@section('content')


	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3><b>Nuevo Proveedor</b></h3>
		</div>		
	</div>
	@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

		<form method="POST" autocomplete="off"  action="{{route('ortopedia.proveedores.store')}}" enctype="multipart/form-data" id="form-personas-create">


  	{{-- {!!Form::token()!!} --}}
 	{{ csrf_field() }}
  			   
  			   	<div class="form-row">

					<div class="form-group col-md-4">
							<label for="razon_social">Razón Social:</label>
					<input type="text" name="razon_social" id='razon_social' class="form-control" placeholder="" required>
							
						</div>

    				<div class="form-group col-md-4">	
							<label for="cuit">CUIT:</label>
					<input type="text" name="cuit" id='CUIT' data-mask='99-99999999-9' class="form-control" placeholder="">
						</div>

    				<div class="form-group col-md-4">				
              			<label for="id_localidad">Localidad:</label>
						 <select name="id_localidad" class="form-control selectpicker" id="id_localidad"  data-live-search="true" >
						 <option value="--Seleccionar--">--Seleccionar--</option>

						@foreach ($localidades as $localidades)
							<option value="{{$localidades->id_localidad}}">{{$localidades->nombre_localidad}}</option>
						@endforeach
								
							</select>	
						</div>

						<div class="form-row">
						<div class="form-group col-md-6">
							<label for="email">Email:</label>
							<input type="email" name="email" id= "email" class="form-control" placeholder="" required>
						</div>
							</div>
							<div class="form-group col-md-6">
							<label for="telefono">Telefono: (*con caract)</label>
							<input type="number" name="telefono" data-mask="99999-999999"class="form-control" placeholder="">
						</div>


						<div class="form-row">
						<div class="form-group col-md-12">
							<label for="domicilio">Domicilio:</label>
							<input type="text" name="domicilio" id="domicilio" class="form-control" placeholder="" required>
						</div>
						</div>
					<div class="form-group col-md-6">
							<button class="btn btn-warning" type="submit">Guardar</button>
							<a href="{{route('ortopedia.proveedores.index')}}" class="btn btn-default">Cancelar</a>

						</div>
					</div>

					{{--  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">        
            			<div class="content">         
            				<img src="{{ asset('./img/grafico.jpg') }}" style="width: 200px; height: 200px; border: 2px solid black">
      					</div>
      				</div>--}}
		</form>
@endsection
	

@section('scrypts')
	$(document).ready(function(){
		var fecha_nac;
		var ano;
		var fecha_actual;
		var f;
		var resultado;
		$('#fecha_nac').blur(function(){
		    fecha_actual= new Date();
		    f=fecha_actual.getFullYear();
		   // alert(f);
			var fecha = new Date($('#fecha_nac').val());
			ano= fecha.getFullYear();
			//alert(ano);
			resultado= f-ano;
			//alert(resultado);
			$('#edad_aprox').val(resultado  + 'años');	

		});
	});

@endsection

@section('js')
<script>
$(document).ready(function()
	{ 
		//$("#dni").inputmask("00.000.000"); 
		$('#CUIT').inputmask ("00-00000000-0");
		

	});

   $("#razon_social").on("keypress", function ()
   
       {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });

  $("#apellidos").on("keypress", function ()
   
       {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });

  $("#domicilio").on("keypress", function ()
   
       {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });


</script>

@endsection



