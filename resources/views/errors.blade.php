@if (count ($errors) >0)
	<div class="alert alert-danger">
	<strong>Uuuuups, nešto je pošlo krivo!</strong>
	<br><br>
	<ul>
		@foreach ($errors->all()as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif