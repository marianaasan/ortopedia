<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    protected $table="proveedores"; // ACA SE REFIERE COMO ESTA ESCRITO EN LA TABLA NO AL MODELO//
    protected $primaryKey="id_proveedor";
    protected $fillable=['id_proveedor','id_localidad','razon_social','domicilio','cuit','email','telefono'];

   	public function Provincias()
    {
    	return $this->belongsTo('App\items_productos'); //se refiere al modelo NO a la TABLA//
    }
}
