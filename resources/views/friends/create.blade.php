@extends('friends.layout')
@section('title','New')
@section('heading','Fill Form to create new contact')
@section('content')
	<form method='POST' action='/friends'>
		{{csrf_field()}}
		<div>
			<p>Name: <input type="text" name="fname" placeholder="Enter Name" /></p>
		</div>
		<div>
			<p>Age: <input type="number" name="age" placeholder="" /></p>
		</div>
		<div>
			<p>Sex: <input type="text" name="gender" /></p>
		</div>
		<div>
			<p>Phone: <input type="number" name="phone" placeholder="Format: 255 713 686 835" /></p>
		</div>
		<div>
			<p>About: <textarea name="about" placeholder="Enter Description of your friend"></textarea></p>
		</div>
		<div>
			<button type="submit">Click To Add Contact</button>
		</div>
	</form>
@endsection