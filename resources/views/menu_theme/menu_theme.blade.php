@extends('layouts.app', ['page' => __('theme'), 'pageSlug' => 'theme'])
@section('content')


    <div class="card">
        <div class="card-body">
            <form method="get" action="{{ route('theme.change',$cafe->id) }}" enctype="multipart/form-data" autocomplete="off">
                <div class="form-check form-check-radio">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="theme" id="exampleRadios1" value="1" @if($cafe->theme_id == 1) checked   @endif>
                        Tema 1
                        <span class="form-check-sign"><img src="{{asset("tema1.jpg")}}" ></span>
                    </label>
                </div>
                <div class="form-check form-check-radio">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="theme" id="exampleRadios2" value="0"  @if($cafe->theme_id == 0) checked   @endif>
                        Tema 2
                        <span class="form-check-sign"><img src="{{asset("tema2.jpg")}}" ></span>
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
