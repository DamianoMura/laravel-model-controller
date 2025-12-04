@extends('layouts.default')
@section('content')
<div class="container mx-auto my-5 text-center">
  <ul>
    @foreach ($movies as $movie)
    <li>
        <h2 class="text-5xl font-semibold">{{ $movie->title }}</h2>
        <h3 class="text-2xl font-semibold">{{ $movie->original_title }}</h3>
        <h4>{{$movie->nationality}}</h4>
        <p class="text-gray-600">Release Year: {{ $movie->date }}</p>
    </li>
      
    @endforeach

  </ul>
</div>
@endsection