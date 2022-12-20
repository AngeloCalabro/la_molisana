@extends('layouts.app')
@section('content')
<section class="container">
    <ul>
        @foreach ($products as $product)
            <li>{{$product->title}}</li>
        @endforeach
    </ul>
</section>
@endsection
