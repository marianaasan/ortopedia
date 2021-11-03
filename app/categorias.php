<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    
	protected $table="categorias"; // ACA SE REFIERE COMO ESTA ESCRITO EN LA TABLA NO AL MODELO//
    protected $primaryKey="id_categoria";
    protected $fillable=['id_categoria','categoria'];

   public function productos()
  {
    	return $this->belongsTo('App\productos'); //se refiere al modelo NO a la TABLA//
    }


}
