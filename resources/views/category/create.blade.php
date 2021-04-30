@extends('layouts.app', ['page' => __('category_create'), 'pageSlug' => 'category_create'])
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Kategori Ekle</h5>
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
                <form method="post" action="{{ route('category.create') }}" enctype="multipart/form-data" autocomplete="off">
                    <div class="card-body">
                        @csrf

                        <div class="form-group">
                            <label>{{ __('Kategori Adı') }}</label>
                            <input type="text" name="name" class="form-control" placeholder="{{ __('Kategori Adı') }}" required >

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
