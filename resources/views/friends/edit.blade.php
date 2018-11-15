@extends('friends.layout')

@section('title', 'Edit Friend')
@section('heading', 'Edit the Details')
@section('content')
	<form method="POST"	action="/friends/{{$friend->id}}">
		{{method_field('PATCH')}}
		{{csrf_field()}}
		<div>
			<p>Name: <input type="text" name="fname" value="{{$friend->fname}}"></p>
		</div>
		<div>
			<p>Phone: <input type="number" name="phone" value="{{$friend->phone}}"></p>
		</div>
		<div>
			<p>Description: <textarea name="about">{{$friend->about}}</textarea></p>
		</div>
		<div>
			<p><button type="submit">Save Changes</button></p>
		</div>
	</form>
		
@endsection