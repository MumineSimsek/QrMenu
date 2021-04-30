<?php

namespace App\Http\Controllers\CMS;

use App\category;
use App\Http\Controllers\Controller;
use App\subCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class subCategoryController extends Controller
{
    public function index()
    {

        $sub_categories = subCategory::where('cafe_id', Auth::user()->cafe_id)->get();
        view::share('sub_categories', $sub_categories);
        return view('sub_category.list');

    }
    public function create_form()
    {
        $categories= category::where('cafe_id',Auth::user()->cafe_id)->get();
        View::share('categories',$categories);
        return view('sub_category.create');
    }
    public function create(Request $request)
    {
//        $request->validate([
//            'name' => 'required|string|max:255',
//            'image' => 'image',
//            'description' => 'required|string|max:255',
//            'category_id'=>'required|integer',
//
//        ]);
        subCategory::create([
            'cafe_id' => Auth::user()->cafe_id,
            'name' => $request->name,
            'image' => $request->image->store('/admin_files/images/subCategory_files', 'attachment'),
            'category_id'=>$request->category_id,
            'status' => 1,

        ]);

        return redirect(route('category.list'));

    }
    public function edit_form($id)
    {
        $sub_category = subCategory::where('cafe_id',Auth::user()->cafe_id)->where('id',$id)->first();
        $categories= category::where('cafe_id',Auth::user()->cafe_id)->get();
        View::share('categories',$categories);
        view::share('sub_category', $sub_category);
        return view('sub_category.edit');

    }
    public function edit(Request $request)
    {
        $category = subCategory::where('cafe_id',Auth::user()->cafe_id)->where('id',$request->id)->first();
        $data = [
            'cafe_id' => Auth::user()->cafe_id,
            'name' => $request->name,
            'image' => $request->image->store('/admin_files/images/subCategory_files', 'attachment'),
            'category_id'=>$request->category_id,
            'status' => 1,


        ];
        if ($request->has('image')) {
            $category->image = $request->image->store('/admin_files/images/subCategory_files', 'attachment');
        }
        $category->update($data);
        return redirect(route('sub_category.list'));

    }

    public function detail($id)
    {
        $sub_category = subCategory::where('cafe_id', Auth::user()->cafe_id)->where('id', $id)->first();
        View::share('sub_category', $sub_category);
        return view('sub_category.detail');
    }
    public function updateStatus(Request $request)
    {
        subCategory::where('id', $request->id)->update(array('status' => $request->status));

    }
    public function remove($id)
    {
        $sub_category = subCategory::where('cafe_id',Auth::user()->cafe_id)->where('id',$id)->first();
        $sub_category->delete();
        return redirect(route('sub_category.list'));
    }
}
