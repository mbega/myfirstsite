@extends('friends.layout')

@section('title','Friends')

@section('heading','List of All friends Contacts')

@section('content')
    <table >
    	<thead>
    		<tr>
    			<th>Fname</th><th>Age</th><th>Gender</th><th>Phone</th><th>About</th><th>Action</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach ($friends as $friend)
				<tr>
					<td>{{$friend->fname}}</td>
					<td>{{$friend->age}}</td>
					<td>{{$friend->gender}}</td>
					<td>{{$friend->phone}}</td>
					<td>{{$friend->about}}</td>
					<td><form action="/friends/{{$friend->id}}" method="GET"><button>Show Details</button></form></td>
				</tr>
			@endforeach
    	</tbody>
    </table>
	
@endsection
