<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetailModel extends Model
{
    protected $table='productdetails';
    protected  $fillable=['quantity', 'number', 'visit_number', 'address', 'contentt', 'description', 'product_id'];

    public function product(){
        return $this->belongsTo('App\ProductModel');
    }

}
