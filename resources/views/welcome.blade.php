<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            @if (Route::has('login'))
                <div >
                    @auth
                        <a class="btn  btn btn-primary" href="{{route('posts.index')}}">BLOG</a>

                        <a class="btn btn-primary my-5" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn btn-primary my-5" href="{{ route('login') }}">Login</a>
                        
                        @if (Route::has('register'))
                         <a  class="btn btn-primary my-5" href="{{ route('register') }}">Register</a>
                        @endif
                        <a class="btn float-right my-5 btn btn-primary" href="{{route('posts.index')}}">BLOG</a>
                    @endauth
                </div>
            @endif
            
                
          

            <div class="container">
                <div class=" row " >
                    <h1 class="display-1 mx-auto text-justify " >Bloglavel</h1>
                    
                </div>
              
                

                
            </div>
        </div>
    </body>
</html>
