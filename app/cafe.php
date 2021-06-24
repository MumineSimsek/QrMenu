<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cafe extends Model
{
    protected $fillable = ['name','description', 'email', 'logo', 'phone', 'address','theme_id'];
    public $timestamps='true';


    public function user(){
        return $this->belongsTo('App\User');

    }

}
