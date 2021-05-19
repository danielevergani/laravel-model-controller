@extends('/movies/template/main')

@section('pageTitle')
    modifica film
@endsection

@section('content')
<div class="container">
    <h1>modifica: {{$movie->title}}</h1>
    <a href="{{route('movies.index')}}">home page</a>

    @if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
    
    <form action="{{route("movies.update", ['movie' => $movie -> id])}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="cover_image">copertina</label>
            <input id="cover_image" type="text" class="form-control" name="cover_image" placeholder="img copertina" value="{{old('cover_image') ? old('cover_image') : $movie->cover_image}}">
        </div>
        <div class="form-group">
            <label for="title">Titolo</label>
            <input id="title" type="text" class="form-control" name="title" placeholder="ins. titolo" value="{{old('title') ? old('title') : $movie->title}}"">
        </div>
        <div class="form-group">
            <label for="author">regista</label>
            <input id="author" type="text" class="form-control" name="author" placeholder="nome regista" value="{{old('author') ? old('author') : $movie->author}}"">
        </div>
        <div class="form-group">
            <label for="genre">genere</label>
            <input id="genre" type="text" class="form-control" name="genre" placeholder="genere" value="{{old('genre') ? old('genre') : $movie->genre}}"">
        </div>
        <div class="form-group">
            <label for="plot">trama</label>
            <textarea id="plot" class="form-control" name="plot" placeholder="trama..." rows="5">{{old('plot') ? old('plot') : $movie->plot}}</textarea>
        </div>
        <div class="form-group">
            <label for="year">anno</label>
            <select class="form-control" id="year" name="year">
                @for ($i = 1900; $i < date("Y") + 1 ; $i++)
                <option value="{{$i}}" {{old('year') == $i || $movie->year == $i ? 'selected' : ''}} >{{$i}}</option>
                @endfor
            </select>
          </div>
        <button type="submit" class="btn btn-primary">salva</button>
        </form>
</div>

@endsection