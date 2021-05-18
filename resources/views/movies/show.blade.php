@extends('/movies/template/main')

@section('pageTitle')
    dettagli film {{$movie -> title}}
@endsection

@section('content')
<a href="{{route('movies.index')}}">home page</a>
<h1>{{$movie -> title}}</h1>
<h3>{{$movie -> author}}</h3>
<p>{{$movie -> plot}}</p>
@endsection
    


