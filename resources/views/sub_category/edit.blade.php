@extends('layouts.app', ['page' => __('sub_category_create'), 'pageSlug' => 'sub_category_create'])
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Alt Kategori Ekle</h5>
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
                <form method="post" action="{{ route('sub_category.edit') }}" enctype="multipart/form-data" autocomplete="off">
                    <div class="card-body">
                        @csrf
                        <input name="id" value="{{$sub_category->id}}" hidden>

                        <div id="category_img" style="    width: 30%;" >
                            <label>{{ __('Alt Kategori Fotoğraf') }}</label>
                            <img id="product"  src="{{asset($sub_category->image)}}">

                        </div>
                        <br>
                        <div class="form-group">
                            <label>{{ __('Alt Kategori Adı') }}</label>
                            <input type="text" name="name" class="form-control" value="{{$sub_category->name}}" required >

                        </div>
                        <div class="form-group">

                            <button type="button" class="btn btn-info"> <label >{{ __('Fotoğraf') }}</label>
                                <input type="file" name="image"  title="Upload New Image" required >
                            </button>
                        </div>
                        <div class="form-group">
                            <label>{{ __('Üst Kategori Seçiniz') }}</label>
                            <select class="custom-select" name="category_id" required  id="exampleFormControlSelect1">
                                @foreach($categories as $category)
                                    <option style="color: black" @if(isset($sub_category->category->id) == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Kaydet') }}</button>
                    </div>
                </form>
            </div>
        </div>
@endsection
