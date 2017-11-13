@extends ('master');

@section('content')
Recepti:<br>
	@foreach($recipes as $recipe)
	{{ $recipe->id }}
	{{ $recipe->name }}<br>
	@endforeach
Sastojci:<br>
	@foreach($ingredients as $ingredient)
	{{ $ingredient->id }} &nbsp
	{{ $ingredient->name }}<br>
	@endforeach
@endsection