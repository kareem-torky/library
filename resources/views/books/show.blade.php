@extends('layout')


@section('content')

  <h1>Book ID: {{ $book->id }}</h1>
  <h3>{{ $book->title }}</h3>
  <p>{{ $book->desc }}</p>

  <hr>

  <a href="{{ route('books.index') }}">Back</a>


@endsection
