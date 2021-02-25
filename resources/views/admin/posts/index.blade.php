@extends('layouts.app')

@section('content')
  <div class="container">
    <table class="table table_striped table-bordered">
      <thead>
        <tr>
          <th> ID </th>
          <th>titolo</th>
          <th>data creazione</th>
          <th colspan="3"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->created_at->format('d-m-Y')}}</td>
            <td>
              <a class="btn btn-outline-dark" href="{{ route('admin.posts.edit', $post->id)}}"><i class="fas fa-pencil-alt"></i></a>
            </td>
            <td>
              <form action="{{route('admin.posts.destroy', $post->id)}}" method="post" onsubmit="return confirm('Procedere alla cancellazione?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-dark"><i class="fas fa-trash-alt"></i></button>
              </form>
              
            </td>
          </tr>            
        @endforeach
      </tbody>
    </table>
  </div>
    
@endsection