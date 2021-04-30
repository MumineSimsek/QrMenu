<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subCategory extends Model
{
    protected $fillable = ['cafe_id','name','image','category_id','status'];
    public $timestamps='true';
    public $table = "subCategories";
    
    public function category(){

        return $this->belongsTo('App\category','category_id');
    }
    public function products(){
        return $this->hasMany('App\product','subCategory_id');
    }
}
