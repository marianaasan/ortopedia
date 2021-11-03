<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provincias extends Model
{
    
	protected $table="provincias"; // ACA SE REFIERE COMO ESTA ESCRITO EN LA TABLA vinciasMODELO//
    protected $primaryKey="id_provincia";
    protected $fillable=['id_provincia','id_pais','nombre_provincia'];

   public function localidades()
  {
    	return $this->belongsTo('App\localidades'); //se refiere al modelo NO a la TABLA//
    }


}