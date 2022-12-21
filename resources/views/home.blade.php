@extends('layouts.app')
@section('content')
<section class="container">
    <h1 class="text-center">La Molisana</h1>
    <ul>
    @foreach ($products as $product)
        <li>{{$product->title}}</li>
    @endforeach
    </ul>
    <ul>
    @foreach ($recipes as $recipe)
        <li>{{$recipe->title}}</li>
    @endforeach
    </ul>
</section>
@endsection
