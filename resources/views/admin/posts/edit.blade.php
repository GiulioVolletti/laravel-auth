@extends('layouts.app')

@section('content')
  <div class="container">    
    <h1>Modifica post</h1>

    <!-- validation -->
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endForeach
        </ul>
      </div>
    @endif
  
    <form action="{{route('admin.posts.update', $post)}}" method="POST">
      @csrf
      @method('PUT')
  
      <div class="form-group">
        <label for="title">titolo</label>
        <input class="form-control" type="text" id="title" name="title" value="{{$post->title}}">
      </div>
  
      <div class="form-group">
        <label for="body">testo</label>
        <textarea class="form-control" id="body" name="body" row="10"  >{{$post->body}}</textarea>
      </div>

      <input class="btn btn-primary" type="submit" value="salva">
      <a href="{{ route('admin.posts.index')}}"  class="btn btn-outline-dark">Torna alla home</a>
  
    </form>
  </div>

@endsection