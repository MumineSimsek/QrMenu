<?php

namespace App\Http\Controllers\CMS;

use App\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class categoryController extends Controller
{
    public function index()
    {

        $categories = category::where('cafe_id', Auth::user()->cafe_id)->get();
        view::share('categories', $categories);
        return view('category.list');

    }

    public function create_form()
    {
        return view('category.create');
    }

    public function create(Request $request)
    {
//        $request->validate([
//            'name' => 'required|string|max:255',
//            'image' => 'image',
//            'description' => 'required|string|max:255',
//
//        ]);
        category::create([
            'cafe_id' => Auth::user()->cafe_id,
            'name' => $request->name,
            'image' => $request->image->store('/admin_files/images/category_files', 'attachment'),
            'status' => 1,

        ]);

        return redirect(route('category.list'));

    }

    public function detail($id)
    {
        $category = category::where('cafe_id', Auth::user()->cafe_id)->where('id', $id)->first();
        View::share('category', $category);
        return view('category.detail');
    }

    public function edit_form($id)
    {
        $category = category::find($id);
        view::share('category', $category);
        return view('category.edit');

    }

    public function edit(Request $request)
    {
        $category = category::find($request->id);
        $data = [
            'cafe_id' => Auth::user()->cafe_id,
            'name' => $request->name,
            'description' => $request->description,


        ];
        if ($request->has('image')) {
            $category->image = $request->image->store('/admin_files/images/category_files', 'attachment');
        }
        $category->update($data);
        return redirect(route('category.list'));

    }
//durum güncelleme fonksiyonu 
    public function updateStatus(Request $request)
    {
        category::where('id', $request->id)->update(array('status' => $request->status));


    }
//silme fonksiyonu
    public function remove($id)
    {
        $category = category::find($id);
        $category->delete();
        return redirect(route('category.list'));
    }
}
