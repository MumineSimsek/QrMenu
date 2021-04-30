@extends('layouts.app', ['page' => __('category_list'), 'pageSlug' => 'category_list'])
@section('content')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title "> {{$category->name }} Kategorisi Detaylar</h4>

                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    @if(isset($category->image))
                                        <th>
                                            Fotoğraf
                                        </th>
                                    @endif
                                    <th>
                                        Ad
                                    </th>

                                    <th>
                                        Durum
                                    </th>


                                    </thead>
                                    <tbody>
                                    <input id="size" value="1" hidden>

                                    <tr>
                                        @if(isset($category->image))
                                            <td>
                                                <img id="product" style="width: 7pc;"
                                                     src="{{asset($category->image)}}">

                                            </td>
                                        @endif
                                        <td>
                                            {{$category->name}}
                                        </td>

                                        <td>
                                            <label class="switch">

                                                <input type="checkbox" id="statusSwitch1" class="status"
                                                       onclick="Switch_category(1,{{$category->id}})"
                                                       value="{{$category->status}}">
                                                <span class="slider round"></span>
                                            </label>
                                        </td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title "> {{$category->name }} Kategorisi Alt Kategoriler</h4>
                        </div>
                        <input id="size2" value="{{count($category->subcategories)}}" hidden>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    @if(isset($subcategory->image))
                                        <th>
                                            Fotoğraf
                                        </th>
                                    @endif
                                    <th>
                                        Ad
                                    </th>

                                    <th>
                                        Durum
                                    </th>


                                    </thead>
                                    <tbody>
                                    {{--                                    <input id="size" value="{{count($categories)}}" hidden>--}}
                                    @foreach($category->subcategories as $key => $subcategory)
                                        <tr>
                                            @if(isset($subcategory->image))
                                                <td>
                                                    <img id="product" style="width: 7pc;"
                                                         src="{{asset($subcategory->image)}}">

                                                </td>
                                            @endif
                                            <td>
                                                {{$subcategory->name}}
                                            </td>

                                            <td>
                                                <label class="switch">

                                                    <input type="checkbox" id="statusSwitch2{{$key+1}}" class="status"
                                                           onclick="Switch_subCategory({{$key+1}},{{$subcategory->id}})"
                                                           value="{{$subcategory->status}}">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .switch {
                position: relative;
                display: inline-block;
                width: 60px;
                height: 34px;
            }

            .switch input {
                opacity: 0;
                width: 0;
                height: 0;
            }

            .slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #c22424;
                -webkit-transition: .4s;
                transition: .4s;
            }

            .slider:before {
                position: absolute;
                content: "";
                height: 26px;
                width: 26px;
                left: 4px;
                bottom: 4px;
                background-color: white;
                -webkit-transition: .4s;
                transition: .4s;
            }

            input:checked + .slider {
                background-color: #3a952f;;
            }

            input:focus + .slider {
                box-shadow: 0 0 1px #2196F3;
            }

            input:checked + .slider:before {
                -webkit-transform: translateX(26px);
                -ms-transform: translateX(26px);
                transform: translateX(26px);
            }

            /* Rounded sliders */
            .slider.round {
                border-radius: 34px;
            }

            .slider.round:before {
                border-radius: 50%;
            }
        </style>

        @endsection
        @stack('js')
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
                integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="{{asset('admin_files/assets/js/category.js')}}"></script>
        <script src="{{asset('admin_files/assets/js/subCategory.js')}}"></script>
    @stack('js')
