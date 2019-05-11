<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cartModel extends Model
{
	 protected $fillable = ['id_pembeli','product_id','qty'];
    protected $table="orders_product";
    public function pembeli(){
    	return $this->belongsTo('App\Pembeli','id_pembeli');
    }
    public function product(){
    	return $this->belongsTo('App\produtcs_model','id');
    }
}
