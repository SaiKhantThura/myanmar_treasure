<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    // protected $fillable = [
    //     'image','name','price','category_id',
    // ];

    public function products()
    {
        return $this->hasMany('App\Products');
    } 
}