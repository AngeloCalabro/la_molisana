@extends('layouts.app')
@section('content')
<section class="container bg-white mt-4">
    <h1 class="text-center">{{$product->title}}</h1>
    <div class="row">
        <div class="col-12 col-md-4">
            <img src="{{$product->image}}" class="img-fluid" alt="{{$product->title}}">
        </div>
        <div class="col-12 col-md-8">
            <p>{!!$product->description!!}</p>
            <div>
                Tipo: {{$product->type}}
            </div>
            <div>
                Peso: {{$product->weight}}
            </div>
            <div>
                Cottura: {{$product->cooking_time}}
            </div>
        </div>
    </div>
</section>
@endsection
