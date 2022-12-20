@extends('layouts.app')
@section('content')
<section class="container">
    <ul>
        @foreach ($products as $product)
            <li><a href="{{route('products.show', $product->id)}}">{{$product->title}}</a></li>
        @endforeach
    </ul>
</section>
@endsection
