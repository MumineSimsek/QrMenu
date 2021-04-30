<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['cafe_id','description','name','price','image','status','subCategory_id','category_id'];
    public $timestamps='true';
    public function subCategory(){

        return $this->belongsTo('App\subCategory','subCategory_id');
    }
    public function Category(){
        return $this->belongsTo('App\Category','category_id');
    }
}
