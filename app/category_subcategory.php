<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category_subcategory extends Model
{
    protected $fillable = ['cafe_id','category_id','sub_category_id'];
    public $timestamps='true';

    public function subcategory(){
        return $this->belongsTo('App\subCategory','sub_category_id');

    }
    public  function  category(){
        return $this->belongsTo('App\category','category_id');
    }
}
