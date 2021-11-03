<div class="modal fade" id="eliminarcategoria">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: red">
				<label><b>Eliminar categoria</b></label>				
			</div>
			<div class="modal-body">

	<form action= "/ortopedia/categoriaseliminar/{{$categorias->id_categoria}} " method="get" id="formDestroycategorias" >
			  	<input type="hidden" value="csrf-token">

			  		<input type="hidden" name="id_categoria" value="{{$categorias->id_categoria}}">
				<div class="form-group">
					<label>Categoria:</label>
					{{$categorias->categoria}}
					
				</div>
				
				<div class="form-group">
					<button class="btn btn-danger" type="submit">Eliminar</button>
					<button class="btn btn-default" data-dismiss="modal">Cancelar</button>
				</div>
			  {{-- {!!Form::close()!!} --}}
			 </form> 	
			</div>
			<div class="modal-footer">
			</div>
		
		</div>
	</div>
</div>