<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable=['title','description'];


     public function articulos()
    {
        return $this->hasMany('App\Articulo');
    }
}
