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
          </tr>            
        @endforeach
      </tbody>
    </table>
  </div>
    
@endsection