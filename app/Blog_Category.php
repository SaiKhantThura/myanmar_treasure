<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_Category extends Model
{
    protected $guarded = [];

    public function blogs()
    {
        return $this->hasMany('App\Blogs');
    } 
}
