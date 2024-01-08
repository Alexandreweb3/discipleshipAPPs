@extends ('master')

@section('content')

<a href="{{ route('index') }}">Home</a>

<h2>Login</h2>


@if (session()->has('success'))
    {{session()->get('success')}} 
@endif

@if (auth()->check())
    Alredy logged in {{ auth()->user()->firstName}} | <a href="{{ route('login.destroy')}}">logout</a>
    @else
    
    @error('error')
    <span>{{ $message }}</span>
    @enderror

    <form action="{{ route('login.login')}}" method="post">
    @csrf
      <input type="text" name="email" value="titoouliz@albuquerque.com">
          @error('email')
          <span>{{$message}}</span>
          @enderror

      <input type="password" name="password" value="Dev$1811">
          @error('password')
          <span>{{$message}}</span>
          @enderror
          
      <button type="submit">Login</button> 
      </form>

   @endif

@endsection