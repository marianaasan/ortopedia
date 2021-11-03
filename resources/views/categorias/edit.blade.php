<div class="modal fade" id="modificarcategoria">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Modificar categorias</h5>				
			</div>
			<div class="modal-body">
			  <form action="{{ route('ortopedia.categorias.update') }}" method="get" id="#" >
			  	<input type="hidden" value="csrf-token">
			  		<input type="hidden" name="id_categoria" value="{{$categorias->id_categoria}}">
				<div class="form-group">
					
					<h5 class="modal-title">Modificar categorias</h5>
					<input type="text" name="categoria" id="categoria" class="form-control" value="{{$categorias->categoria}}">
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
		 {{-- @foreach ($categorias as $key => $val) --}}
		 {{-- <option value="{{ $key }}" {{ $key == old('categoria_id') ? 'selected' : '' }}>{{ $val }}</option> --}}
      {{-- @endforeach --}}
		</div>
	</div>
</div>

@section('js')
<script>
	
  $(document).ready( function () {
      $("#categoria").on("keypress", function () {
       $input=$(this);
       setTimeout(function () {
        $input.val($input.val().toUpperCase());
       },50);
      });
     });

</script>

@endsection