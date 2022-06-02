<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name', 'description', 'price', 'image', 'category_id'];
    public function category(){
        return $this->hasOne('App\Category','id','category_id');
       }
}
