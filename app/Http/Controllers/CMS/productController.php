<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\product;
use App\subCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\view;

class productController extends Controller
{

    public function index()
    {

        $products = product::where('cafe_id', Auth::user()->cafe_id)->paginate(5);
        view::share('products', $products);
        return view('products.list');


    }
//create_form fonksiyonu
    public function create_form()
    {
        
        $sub_categories = subCategory::where('cafe_id', Auth::user()->cafe_id)->get();
        
        View::share('sub_categories', $sub_categories);
        
        return view('products.create');
    }

    public function create(Request $request)
    {
//        $request->validate([
//            'name' => 'required|string|max:255',
//            'image' => 'image',
//            'description' => 'required|string|max:255',
//
//        ]);
        product::create([
            'cafe_id' => Auth::user()->cafe_id,
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image->store('/images/product_files', 'attachment'),
            'subCategory_id' => $request->sub_category_id,
            'price' => $request->price,
            'status' => 1,

        ]);

        return redirect(route('product.list'));

    }

    public function edit_form($id)
    {
        $sub_categories = subCategory::where('cafe_id', Auth::user()->cafe_id)->get();
        View::share('sub_categories', $sub_categories);
        $product = product::where('cafe_id',Auth::user()->cafe_id)->where('id',$id)->first();
        view::share('product', $product);
        return view('products.edit');

    }
//edit fonksiyonu 
    public function edit(Request $request)
    {
        $product = product::where('cafe_id',Auth::user()->cafe_id)->where('id',$request->id);
        
        $data = [
            'cafe_id' => Auth::user()->cafe_id,
            'name' => $request->name,
            'description' => $request->description,
            
            'image' => $request->image->store('/admin_files/images/product_files', 'attachment'),
            'subCategory_id' => $request->sub_category_id,
            
            'price' => $request->price,
            'status' => 1,


        ];
        // image control 
        if ($request->has('image')) {
            $product->image = $request->image->store('/admin_files/images/product_files', 'attachment');
        }
        $product->update($data);
        return redirect(route('product.list'));

    }

    public function updateStatus(Request $request)
    {
        product::where('id', $request->id)->update(array('status' => $request->status));


    }


    public function remove($id)
    {
        $product = product::where('cafe_id',Auth::user()->cafe_id)->where('id',$id)->first();
        $product->delete();
        return redirect(route('product.list'));
    }


}
