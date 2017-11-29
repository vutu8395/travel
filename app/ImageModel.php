<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model
{
    protected $table='images';
    protected $fillable=['id','image', 'product_id'];


    //public $timestamps=false;


    public function product(){
        return $this->belongsTo('App\ProductModel');
    }
}
