@extends('layouts.app')
@section('content')
<section class="container bg-white mt-4">
    <h1 class="text-center">{{$recipe->title}}</h1>
    <div class="row">
        <div class="col-12 col-md-4">
            <img src="{{$recipe->image}}" class="img-fluid" alt="{{$recipe->title}}">
        </div>
        <div class="col-12 col-md-8">
            <p>{!!$recipe->instructions!!}</p>
        </div>
    </div>
</section>
@endsection
