<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function orderProducts()
    {
        return $this->hasMany('App\OrderProduct');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
