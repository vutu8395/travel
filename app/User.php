<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='users';

    protected $fillable = [
        'name', 'email','repassword', 'password','rule_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function product(){
        return $this->hasMany('App\ProductModel');
    }

    public function rule(){
        return $this->belongsTo('App\Rule');
    }


    public function isAdmin(){
        return ($this->rule->id == '1') ? true : false;
    }
}
