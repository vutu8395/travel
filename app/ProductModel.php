<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table='products';

    protected $fillable=['id','name','price','discount','image','hot','user_id','cate_id'];

    public function cate(){
        return $this->belongsTo('App\CateModel');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }

    public  function pimages (){
        return $this->hasMany('App\ImageModel','product_id');
    }

    public  function productdetail (){
    return $this->hasMany('App\ProductDetailModel','product_id');
    }
}
