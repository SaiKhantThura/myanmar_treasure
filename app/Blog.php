<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = [];

    public function blogCategory()
    {
        return $this->hasMany('App\BlogCategory');
    } 
}
