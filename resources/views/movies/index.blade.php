@extends('movies/template/main')
  
@section('pageTitle')
    lista film
@endsection

@section('content')
<div class="container">
    <h1>I FILM</h1>
    <a href="{{route('movies.create')}}"><button type="button" class="btn btn-success">aggiungi film</button></a>
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
                <td>
                    <button class="btn"><a href="{{route('movies.show', ['movie' => $movie -> id])}}">DETTAGLI</a></button>
                    <button class="btn"><a href="{{route('movies.edit', ['movie' => $movie -> id])}}">MODIFICA</a></button>
                </td>
                <td><form action="{{route('movies.destroy', ['movie'=> $movie])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn" type="submit">cancella</button>
                </form></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
    


