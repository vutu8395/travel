<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table='contacts';
    protected $fillable=['id','name', 'email','address','phone','receive'];


    //public $timestamps=false;
}
