<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<style type="text/css">
		table, th, td {
			border: 1px solid gray;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<div><h1>@yield('heading')</h1></div>
	<div>@yield('content')</div>
	<hr />
	<div>
		<p>Links to other Pages</p>
		<ul>
			<li><a href='/friends'>All Contacts</a></li>
			<li><a href='/friends/create'>New Contact</a></li>
			<li><a href='/friends/{id}/edit'>Edit Contact</a></li>
			<li><a href='#'></a>Delete Contact</li>
			<li><a href='#'></a>Here Here</li>
		</ul>
	</div>
</body>
</html>