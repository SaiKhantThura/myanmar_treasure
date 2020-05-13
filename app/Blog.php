<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = [];

    public function blog_category()
    {
        return $this->hasMany('App\Blog_Category');
    } 
}
