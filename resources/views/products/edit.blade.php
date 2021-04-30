@extends('layouts.app', ['page' => __('prroduct_create'), 'pageSlug' => 'product_create'])
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Ürün Düzenle</h5>
                </div>
                @if($errors->any())
                    <div class="alert alert-error">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ route('product.edit') }}" enctype="multipart/form-data"
                      autocomplete="off">
                    <div class="card-body">
                        @csrf
                        <input name="id" value="{{$product->id}}" hidden>
                        <div id="product_img" style="    width: 30%;">
                            <label>{{ __('Ürün Fotoğraf') }}</label>
                            <img id="product" src="{{asset($product->image)}}">

                        </div>
                        <div class="form-group">
                            <label>{{ __('Ürün Adı') }}</label>
                            <input type="text" name="name" class="form-control" placeholder="{{ $product->name }}"
                                   value="{{ $product->name }}" required>

                        </div>
                        <div class="form-group">
                            <label>{{ __('Ürün Fiyatı') }}</label>
                            <input type="text" name="price" class="form-control" value="{{$product->price}}" required >

                        </div>

                        <div class="form-group">
                            <label>{{ __('Açıklama') }}</label>
                            <textarea name="description" class="form-control"
                                      >{{ $product->description}} </textarea>

                        </div>
                        <div class="form-group">
                            <label>{{ __('Alt Kategori Seçiniz') }}</label>
                            <select class="custom-select" name="sub_category_id" required
                                    id="exampleFormControlSelect1">
                                @foreach($sub_categories as $sub_category)
                                    <option style="color: black"
                                            @if(isset($product->subCategory_id) == $sub_category->id) selected
                                            @endif value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">

                            <button type="button" class="btn btn-info"><label>{{ __('Fotoğraf') }}</label>
                                <input type="file" name="image" title="Upload New Image" required>
                            </button>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Kaydet') }}</button>
                    </div>
                </form>
            </div>
        </div>
@endsection
