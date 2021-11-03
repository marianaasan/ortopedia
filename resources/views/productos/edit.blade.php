<div class="modal fade" id="modificarproductos">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<label>Modificar Productos:</label>				
			</div>
			<div class="modal-body">	  
			  <form action="{{ route('ortopedia.productos.update') }}" method="get" id="#" >
			  	<input type="hidden" value="csrf-token">

			<div class="form-group">
					<select id="id_categoria" name="id_categoria" class="form-control selectpicker" data-live-search="true" >
					 @foreach($categorias as $categorias)
	<option value="{{ $categorias->id_categoria }}" {{ $productos[0]->id_categoria==$categorias->id_categoria? 'selected' : ' ' }}>{{ $categorias->id_categoria }}  {{ $categorias->categoria }}</option>
					@endforeach
					</select>
			</div>

<input type="hidden" name="id_producto" id ="id_producto"  value="{{$productos[0]->id_producto}}">
				<div class="form-group">
		<label>Productos</label>
			<input type="text" name="producto" id= "producto" class="form-control" value="{{$productos[0]->productos}}">
					
		</div>

				<div class="form-group">
					<label>Precio</label>
					<input type="number" name="precio" class="form-control" value="{{$productos[0]->precio}}">
				</div>
				<div class="form-group">
					<label>Stock</label>
					<input type="number" name="stock"  class="form-control" value="{{$productos[0]->stock}}">
				</div>
				


				
				<div class="form-group">
					<button class="btn btn-success" type="submit">Guardar</button>
					<button class="btn btn-default" data-dismiss="modal" >Cancelar</button>
				</div>
			  {{-- {!!Form::close()!!} --}}
			 </form> 	
			</div>
			<div class="modal-footer">
			</div>
			
		</div>
	</div>
</div>

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