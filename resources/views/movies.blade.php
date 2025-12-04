@extends('layouts.default')
@section('content')
  <div class="container mx-auto px-4 py-8 text-center">
    <h1 class="text-3xl font-bold mb-6">Movies List</h1>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
        @foreach ($movies as $movie)
        <x-movie>
          <h2 class="text-xl font-semibold">{{ $movie->title }}</h2>
          <p class="text-gray-700 font-bold">( {{ $movie->original_title }} ) </p>
          <p class="text-gray-700">Release date: {{ $movie->date }}</p>
          <p class="text-gray-700">vote: {{ $movie->vote }}</p>
        </x-movie>
        @endforeach
      </div>
  </div>
@endsection