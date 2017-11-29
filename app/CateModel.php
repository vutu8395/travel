<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CateModel extends Model
{
    protected $table='cates';

    protected $fillable=['id','name','parentId','type'];

    public function product(){
        return $this->hasMany('App\ProductModel');
    }

}
