<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title>Laravel</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
<div class="flex-center position-ref full-height" id="app">
	<div class="container mt-md-5">
		<h1 class="mb-lg-5">List of all users.</h1>
		<data-table
			fetch-url="{{ route('users.table') }}"
			:columns="['name', 'email', 'address' , 'created_at']"
		></data-table>
	</div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>