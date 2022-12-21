@extends('layouts.app')
@section('content')
  <section class="container mt-4" id="recipes">
    <h1 class="text-center">Ricette</h1>
    <div class="row">
      @foreach ($recipes as $recipe)
      <div class="col-12 col-sm-6 col-md-4 mb-4">
          <div class="card">
              <img src="{{$recipe->image}}" class="card-img-top" alt="{{$recipe->title}}">
              <div class="card-body">
                <h5 class="card-title">{{$recipe->title}}</h5>
                <p class="card-text">{{Str::limit($recipe->instructions,80)}}</p>
                <a href="{{route('recipes.show', $recipe->id)}}" class="btn btn-primary">Scopri!</a>
                <a href="{{route('recipes.edit', $recipe->id)}}" class="btn btn-warning ms-3">Modifica!</a>
                <form action="{{route('recipes.destroy', $recipe->id)}}" method="POST" class="d-inline">
                    @csrf
                    @METHOD('DELETE')
                    <button type="submit" class="btn btn-danger ms-3">Cancella!</button>
                </form>

              </div>
            </div>
      </div>
      @endforeach
    </div>
  </section>

@endsection
