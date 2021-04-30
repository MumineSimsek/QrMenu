@extends('layouts.app', ['page' => __('category_create'), 'pageSlug' => 'category_create'])
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Kategori Düzenle</h5>
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
                <form method="post" action="{{ route('category.edit') }}" enctype="multipart/form-data" autocomplete="off">
                    <div class="card-body">
                        @csrf
                        <input name="id" value="{{$category->id}}" hidden>

                        <div id="category_img" style="    width: 30%;" >
                            <label>{{ __('Kategori Fotoğraf') }}</label>
                            <img id="product"  src="{{asset($category->image)}}">

                        </div>

                        <div class="form-group">
                            <label>{{ __('Kategori Adı') }}</label>
                            <input type="text" name="name" class="form-control" placeholder="{{ $category->name }}" value="{{ $category->name }}" required >

                        </div>

                        <div class="form-group">

                            <button type="button" class="btn btn-info"> <label >{{ __('Fotoğraf') }}</label>
                                <input type="file" name="image"  title="Upload New Image" required >
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
