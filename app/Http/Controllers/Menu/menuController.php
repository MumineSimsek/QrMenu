<?php

namespace App\Http\Controllers\Menu;

use App\cafe;
use App\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class menuController extends Controller
{
    //cafe menu fonksiyonu güncellendi 
    
    public function index($id)
    {
        
        $cafe = cafe::where('id',$id)->first();
        
        $categories = category::where('cafe_id', $id)->get();
        View::share('cafe',$cafe);
       View::share('categories', $categories);
        
       return view('menu.index');

   }
}
