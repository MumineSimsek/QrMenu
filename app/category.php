<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['cafe_id','name','image','status'];
    public $timestamps='true';

    public function subcategories(){
        return $this->hasMany('App\subCategory','category_id');

    }
    public  function  product(){
        return $this->hasMany('App\product','category_id');
    }
}
