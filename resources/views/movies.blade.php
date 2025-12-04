@extends('layouts.default')
@section('content')
  <div class="container mx-auto px-4 py-8 text-center">
    <h1 class="text-3xl font-bold mb-6">Movies List</h1>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @foreach ($movies as $movie)
        <x-movie>
          <x-slot:title>{{ $movie->title }}</x-slot>
          <x-slot:original_title>{{ $movie->original_title }}</x-slot>
          <x-slot:date>{{ $movie->date }}</x-slot>
          <x-slot:nationality>{{ $movie->nationality }}</x-slot>
          <x-slot:vote>{{ $movie->vote }}</x-slot>
        </x-movie>
        @endforeach
      </div>
  </div>
@endsection