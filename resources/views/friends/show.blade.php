@extends('friends.layout')

@section('title', 'Show Contact')

@section('heading')
	Record for my friend {{$friend->fname}}
@endsection

@section('content')
	<h2>Gender: {{$friend->gender}} , and s/he is {{$friend->age}} years old.</h2>
	<h2>Contact #: {{$friend->phone}}</h2>
	<h2 style="color:blue">About {{$friend->about}}</h2><hr />
	<p>{{$friend->about}}</p><hr />
	<form action="/friends/{{$friend->id}}" method="POST">
		{{method_field('DELETE')}}
		@csrf()
		<button type="submit">Delete Contact</button>
		
	</form>
@endsection
