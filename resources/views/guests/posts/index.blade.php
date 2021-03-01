@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Post del Blog</h1>

    @foreach ($posts as $post)
      <div class="card my-5">
        <div class="card-header">
          <h2>{{$post->title}}</h2>
          <small>{{$post->user->name}}</small>
        </div>
        <div class="card-body">
          @if ($post->image)
            <img class="img-fluid" src="{{asset('storage/'.$post->image)}}" alt="{{$post->title}}">
                            
          @else
            <img class="img-fluid" src="{{asset('storage/images/placeolder.png')}}" alt="placeholder">
              
          @endif
          <hr>
          {{$post->body}}
        </div>
      </div>
        
    @endforeach
    
  </div>
    
@endsection