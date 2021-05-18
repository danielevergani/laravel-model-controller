@extends('/movies/template/main')

@section('pageTitle')
    aggiungi film
@endsection

@section('content')
<div class="container">
    <h1>nuovo film</h1>
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
    
    <form action="{{route("movies.store")}}" method="POST">
        @method('POST')
        @csrf
        <div class="form-group">
            <label for="cover_image">copertina</label>
            <input id="cover_image" type="text" class="form-control" name="cover_image" placeholder="img copertina">
        </div>
        <div class="form-group">
            <label for="title">Titolo</label>
            <input id="title" type="text" class="form-control" name="title" placeholder="ins. titolo">
        </div>
        <div class="form-group">
            <label for="author">regista</label>
            <input id="author" type="text" class="form-control" name="author" placeholder="nome regista">
        </div>
        <div class="form-group">
            <label for="genre">genere</label>
            <input id="genre" type="text" class="form-control" name="genre" placeholder="genere">
        </div>
        <div class="form-group">
            <label for="plot">trama</label>
            <textarea id="plot" class="form-control" name="plot" placeholder="trama..." rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="year">anno</label>
            <select class="form-control" id="year" name="year">
                @for ($i = 1900; $i < date("Y") + 1 ; $i++)
                <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
          </div>
        <button type="submit" class="btn btn-primary">salva</button>
        </form>
</div>

@endsection