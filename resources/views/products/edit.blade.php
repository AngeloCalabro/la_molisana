@extends('layouts.app')
@section('content')

<section class="container mt-4">
    <h1 class="text-center">Modifica: {{$product->title}}</h1>
    <div class="row bg-white">
        <div class="col-12">
            <form action="{{route('products.update', $product->id)}}" method="POST" class="p-4">
                @csrf
                @method('PUT')
                  <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{old('title', $product->title)}}" required>
                  </div>
                  <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description">{{old('description', $product->description)}}</textarea>
                  </div>
                  <div class="mb-3">
                    <label for="weight" class="form-label">Peso</label>
                    <input type="text" class="form-control" id="weight" name="weight" aria-describedby="weightHelp" value="{{old('weight', $product->weight)}}" required>
                    <div id="weightHelp" class="form-text">Peso in grammi.</div>
                  </div>
                  <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <select class="form-control" id="type" name="type" required>
                        <option value="lunga" {{old('type', $product->type == 'lunga' ? 'selected' : '')}}>Lunga</option>
                        <option value="corta" {{old('type', $product->type == 'corta' ? 'selected' : '')}}>Corta</option>
                        <option value="cortissima" {{old('type', $product->type == 'cortissima' ? 'selected' : '')}}>Cortissima</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="cooking_time" class="form-label">Cottura</label>
                    <input type="text" class="form-control" id="cooking_time" name="cooking_time" aria-describedby="cookingHelp" value="{{old('cooking_time', $product->cooking_time)}}" required>
                        <div id="cookingHelp" class="form-text">Tempo in minuti.</div>
                  </div>
                  <div class="mb-3">
                    <label for="image" class="form-label">Url Immagine</label>
                    <input type="text" class="form-control" id="image" name="image" value="{{old('image', $product->image)}}" required>
                  </div>
                  <button type="submit" class="btn btn-success">Submit</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
            </form>
        </div>
    </div>

</section>
@endsection
