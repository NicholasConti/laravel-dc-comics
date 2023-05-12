@extends('layout.app')

@section('page.p_title')
Modifica
@endsection

@section('page.title')
<div class="container">
  <h1>Modifica i dati : {{$comic->title}}</h1>
</div>
@endsection

@section('page.main')
<div class="container">
    <a href="{{ route('comics.index') }}" class="btn btn-primary btn-sm">Torna all'elenco</a>
   
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf

        @method('PUT')
        <div class="mb-3">
          <label for="src" class="form-label">Immagine</label>
          <input type="text" class="form-control" id="src" name="thumb" value="{{$comic->thumb}}">
        </div>

        <div class="mb-3">
            <label for="descrizione" class="form-label">Descrizione</label>
            <textarea class="form-control" id="descrizione" rows="2" name="description">{{$comic->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="titolo" name="title" value="{{$comic->title}}">
        </div>

        <div class="mb-3">
            <label for="prezzo" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="prezzo" name="price" min="5" max="20" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="serie" class="form-label">Serie</label>
            <input type="text" class="form-control" id="serie" name="series" value="{{$comic->type}}">
        </div>
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="tipo" name="type">
        </div>
        <div class="mb-3">
            <label for="data" class="form-label">Data di uscita</label>
            <input type="date" class="form-control" id="data" name="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <textarea class="form-control" id="artists" rows="2" name="artists">{{$comic->artists}}</textarea>
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <textarea class="form-control" id="writers" rows="2" name="writers">{{$comic->writers}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Modifica</button>
      </form>

</div>  

@endsection