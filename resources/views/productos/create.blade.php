@extends('layouts.admin')


@section('content')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3><b>Nuevos Productos</b></h3>
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


	<form method="POST" autocomplete="off"  action="{{route('ortopedia.productos.store')}}" enctype="multipart/form-data" id="#">
		{{ csrf_field() }}


 <div class="form-row">

  <div class="row">
                <div class="form-group col-md-6"> 
            <label for="producto">Productos</label>
            <input type="text" name="producto" id="producto" class="form-control" placeholder=""required>
           
          </div>
  
 <div class="form-group col-md-6">
              <label for="categoria">Categoria</label>
              <select name="id_categoria" class="form-control selectpicker" id="id_categoria"  data-live-search="true" >
                <option value="--Select--">--Seleccionar--</option>
                
                @foreach($categorias as $categorias)
            <option value="{{ $categorias->id_categoria}}"> {{ $categorias->categoria}}</option>
                @endforeach
              </select>
            </div>
</div>
				

      <div class="form-row">
    <div class="form-group col-md-6">
      <label for="precio">Precio</label>
      <input type="number" step="0.01" class="form-control @error('precio') is-invalid  @enderror" name= "precio" id="precio" value= "{{old ('precio')}} " max="99999999" min="0.01" >
       </div>
 </div>
  <div class="form-group col-md-6">
      <label for="stock">Stock</label>
      <input type="number" step="0.01" class="form-control @error('stock') is-invalid  @enderror" name= "stock" id="stock" value= "{{old ('stock')}} " max="99999999" min="0.01" >
       </div>

			<div class="form-group col-md-6">	
        <button class="btn btn-warning" type="submit">Guardar</button>
			<a href="{{route('ortopedia.productos.index')}}" class="btn btn-default">Cancelar</a>
</div>
						</div>			
      				</div>

      				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" >
      					<div class="content">         
            			
      					</div>
      				</div>
      			
</form>


@endsection
@section('js')
<script>
  
  $(document).ready( function () {
      $("#producto").on("keypress", function () {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });
     });

</script>

@endsection