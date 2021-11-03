<div class="modal fade" id="eliminarproductos">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background: red">
				<label><b>Eliminar Producto</b></label>				
			</div>
			<div class="modal-body">

	<form action= "/ortopedia/productoseliminar/{{$productos[0]->id_producto}}" method="get" id="formDestroyproductos" >           
			  	<input type="hidden" value="csrf-token">

<input type="hidden" name="id_producto" value="{{$productos[0]->id_producto}}">
				<div class="form-group">
					<label>Productos:</label>
					{{$productos[0]->productos}}
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

