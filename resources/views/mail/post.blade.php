<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Post</title>
</head>
  <body>
    <h1>Post Creato</h1>
    <h2>{{$post->title}}</h2>
    <img class="img-fluid" src="{{asset('storage/'.$post->image)}}" alt="{{$post->title}}">
    <p>{{$post->body}}</p>
  </body>
</html>