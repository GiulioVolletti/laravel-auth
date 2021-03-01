<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Post</title>
</head>
  <body>
    <div class="container">
      <h1>Post Creato</h1>
      <h2>{{$post->title}}</h2>
      @if ($post->image)
        <img style="width: 100%" src="{{asset('storage/'.$post->image)}}" alt="{{$post->title}}">
                            
       @else
        <img class="img-fluid" src="{{asset('storage/images/placeolder.png')}}" alt="placeholder">
              
      @endif
      <p>{{$post->body}}</p>

    </div>
  </body>
</html>