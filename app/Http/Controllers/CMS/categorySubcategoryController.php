<?php

namespace App\Http\Controllers\CMS;

use App\category_subcategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class categorySubcategoryController extends Controller
{
   public function create(Request $request){
       category_subcategory::create([
           'cafe_id' => Auth::user()->cafe_id,
           'category_id'=>$request->category_id,
           'sub_category_id'=>$request->sub_category_id,
       ]);
   }
}
