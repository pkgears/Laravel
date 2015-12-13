<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$article->title}}</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
</head>
<body>
	Hola codigofacilito
	<br><br>
	<h1>	
		{{ $article->title }}
	</h1>
	<hr>
	{{$article->content}}
	<hr>
	{{$article->user->name}} | {{$article->categorie->name}} | 
	@foreach($article->tags as $tag)
		{{$tag->name}}
	@endforeach
</body>
</html>



{{-- @for($i=0 ; $i <=5; $i++)
	{{$i}}
@endfor

@if(1==1)
	{{"Es igual a 1"}}
@endif
 --}}