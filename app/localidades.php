<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class localidades extends Model
{
    
	protected $table="localidades"; // ACA SE REFIERE COMO ESTA ESCRITO EN LA TABLA vinciasMODELO//
    protected $primaryKey="id_localidad";
    protected $fillable=['id_localidad','id_provincia','nombre_localidad'];

  // public function localidades()
//  {
 //   	return $this->belongsTo('App\clientes'); //se refiere al modelo NO a la TABLA//
  //  }

}