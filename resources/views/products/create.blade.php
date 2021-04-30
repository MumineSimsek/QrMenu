@extends('layouts.app', ['page' => __('prroduct_create'), 'pageSlug' => 'product_create'])
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Ürün Ekle</h5>
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
                <form method="post" action="{{ route('prodcut.create') }}" enctype="multipart/form-data" autocomplete="off">
                    <div class="card-body">
                        @csrf

                        <div class="form-group">
                            <label>{{ __('Ürün Adı') }}</label>
                            <input type="text" name="name" class="form-control" placeholder="{{ __('Ürün Adı') }}" required >

                        </div>
                        <div class="form-group">
                            <label>{{ __('Ürün Fiyatı') }}</label>
                            <input type="text" name="price" class="form-control" placeholder="{{ __('Ürün Fiyatı') }}" required >

                        </div>

                        <div class="form-group">
                            <label>{{ __('Açıklama') }}</label>
                            <textarea name="description" class="form-control"  > </textarea>

                        </div>
                        <div class="form-group">
                            <label>{{ __('Alt Kategori Seçiniz') }}</label>
                            <select class="custom-select" name="sub_category_id" required id="exampleFormControlSelect1">
                                @foreach($sub_categories as $sub_category)
                                    <option  style="color: black" value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <br>
                        <div class="form-group">
                            <img id="blah" src="#" hidden alt="Lütfen Fotoğraf Seçiniz" style="max-width: 20%;" />
                            <button type="button" class="btn btn-info"> <label >{{ __('Fotoğraf') }}</label>
                            <input type="file" name="image" id="imgInp" onchange="readURL(this);" title="Upload New Image" required >

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
        @stack('js')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah')
                            .removeAttr('hidden')
                            .attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
    @stack('js')