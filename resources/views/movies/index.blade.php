@extends('movies/template/main')
  
@section('pageTitle')
    lista film
@endsection

@section('content')
<div class="container">
    <h1>I FILM</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">titolo</th>
            <th scope="col">regista</th>
            <th scope="col">genere</th>
            <th scope="col">azioni</th>
          </tr>
        </thead>
        <tbody>
            
        
        @foreach ($movies as $movie)
            <tr>
                <td>{{$movie -> title}}</td>
                <td>{{$movie -> author}}</td>
                <td>{{$movie -> genre}}</td>
                <td><button class="btn"><a href="{{route('movies.show', ['movie' => $movie -> id])}}">DETTAGLI</a></button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
    


