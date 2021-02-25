@extends('layouts.app')

@section('content')
  <div class="container">    
    <h1>Crea un nuovo post</h1>

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
  
    <form action="{{route('admin.posts.store')}}" method="POST">
      @csrf
      @method('POST')
  
      <div class="form-group">
        <label for="title">titolo</label>
        <input class="form-control" type="text" id="title" name="title" value="{{old('title')}}">
      </div>
  
      <div class="form-group">
        <label for="body">testo</label>
        <textarea class="form-control" id="body" name="body" row="10"  >{{old('body')}}</textarea>
      </div>

      <input class="btn btn-primary" type="submit" value="salva">
  
    </form>
  </div>

@endsection