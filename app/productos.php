<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    
	protected $table="productos"; // ACA SE REFIERE COMO ESTA ESCRITO EN LA TABLA NO AL MODELO//
    protected $primaryKey="id_producto";
    protected $fillable=['id_producto','id_categoria','producto','precio','stock'];

   public function items_productos()
  {
    	return $this->belongsTo('App\items_productos'); //se refiere al modelo NO a la TABLA//
    }


}