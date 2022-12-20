@extends('layouts.app')
@section('content')
    <section class="container">
        <form action="{{ route('products.store') }}" method="POST">
        @csrf

            <label for="title">Title</label>
            <input type="text" name="title" id="title">

            <label for="description">Descrizione</label>
            <input type="text" name="description" id="description">

            <label for="type">Type</label>
            <input type="text" name="type" id="type">

            <label for="image">Image</label>
            <input type="text" name="image" id="image">

            <label for="cooking_time">Cooking Time</label>
            <input type="text" name="cooking_time" id="cooking_time">

            <label for="weight">Weight</label>
            <input type="text" name="weight" id="weight">

            <input type="submit" value="Invia">
        </form>

    </section>
@endsection
