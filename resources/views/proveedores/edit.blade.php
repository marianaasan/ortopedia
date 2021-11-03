<div class="modal fade" id="modificarproveedores">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<label>Modificar Persona</label>				
			</div>
			<div class="modal-body">
	 <form action="{{route('ortopedia.proveedores.update')}}" method="get" id="#" >
			  	<input type="hidden" value="csrf-token">	

				<div class="form-group">
					<label>Cuit</label>
					<input type="text" name="cuit" class="form-control" value="{{$proveedores[0]->cuit}}">
				</div>
				
				<div class="form-group">
					<label>Razón Social</label>
					<input type="text" name="razon_social" class="form-control" value="{{$proveedores[0]->razon_social}}">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control" value="{{$proveedores[0]->email}}">
				</div>
				
				<div class="form-group">
					<label>Domicilio</label>
					<input type="text" name="domicilio" class="form-control" value="{{$proveedores[0]->domicilio}}">
				</div>
		
				<div class="form-group">
					<label>Celular</label>
					<input type="text" name="telefono" class="form-control" value="{{$proveedores[0]->telefono}}">
				</div>

			
				<div class="form-group">
					<label>Localidad</label>
					<select id="id_localidad" name="id_localidad" class="form-control selectpicker" data-live-search="true" >
					@foreach($localidades as $localidades)
			<option value="{{ $localidades->id_localidad}}" {{ $proveedores[0]->id_localidad ==$localidades->id_localidad ? 'selected' : ' ' }}> {{ $localidades->nombre_localidad}}</option>
					@endforeach
					</select>
				</div>
			

		<div class="form-group">
			<button class="btn btn-success" type="submit">Guardar</button>
			<button class="btn btn-default" data-dismiss="modal">Cancelar</button>
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