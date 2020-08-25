@extends('layout')

@section('title')
    All books
@endsection

@section('content')

<h1>All books</h1>

<a class="btn btn-primary" href="{{ route('books.create') }}">Create</a>

@foreach($books as $book)

<hr>
<a href="{{ route('books.show', $book->id) }}">
  <h3>{{ $book->title }}</h3>
</a>

<p>{{ $book->desc }}</p>

<a class="btn btn-danger" href="{{ route('books.delete', $book->id) }}">Delete</a>

@endforeach

{{ $books->render() }}
    
@endsection

