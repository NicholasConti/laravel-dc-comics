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
      </tr>
    </thead>
    <tbody>
    @foreach ($comics as $comic)
    <tr>
        <td>{{ $comic->title}}</td>
        <td>{{ $comic->price}}$</td>
        <td>{{ $comic->sale_date}}</td>
    </tr>  
    @endforeach
    </tbody>
    </table>
</div>
@endsection