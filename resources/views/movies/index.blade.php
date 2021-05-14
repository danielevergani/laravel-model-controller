@extends('movies/template/main')
    <h1>I FILM</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <h2>{{$movie -> title}}</h2>
                <button><a href="{{route('movies.show', ['movie' => $movie -> id])}}">DETTAGLI</a></button>
            </li>
        @endforeach
    </ul>


