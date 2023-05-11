@extends('layout.app')

@section('page.p_title')
    Lista Fumetti
@endsection

@section('page.title')
<div class="container">
    <h1>Elenco fumetti</h1>
</div>  
@endsection

@section('page.main')
<div class="container">
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">Titolo</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Data di uscita</th>
        <th scope="col">Dettaglio</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($comics as $comic)
    <tr>
        <td>{{ $comic->title}}</td>
        <td>{{ $comic->price}}$</td>
        <td>{{ $comic->sale_date}}</td>
        <td class="d-flex gap-2">
          <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary btn-sm">Dettagli</a>
          <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning btn-sm">Modifica</a>
          <form action="{{ route('comics.destroy', $comic->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Elimina" class="btn btn-danger btn-sm">
          </form>
        </td>
    </tr>  
    @endforeach
    </tbody>
    </table>
    <div class="text-center">
      <a href="{{ route('comics.create') }}" class="btn btn-danger">Crea un nuovo fumetto</a>
  <table class="table">
</div>
@endsection