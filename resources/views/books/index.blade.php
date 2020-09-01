@extends('layout')

@section('title')
    All books
@endsection

@section('content')

<h1>All books</h1>

{{-- @auth --}}
<a class="btn btn-primary" href="{{ route('books.create') }}">Create</a>
{{-- @endauth --}}

@foreach($books as $book)

<hr>
<a href="{{ route('books.show', $book->id) }}">
  <h3>{{ $book->title }}</h3>
</a>

<p>{{ $book->desc }}</p>

@auth
  @if(Auth::user()->is_admin == 1)
    <a class="btn btn-danger" href="{{ route('books.delete', $book->id) }}">Delete</a>
  @endif
@endauth

@endforeach

{{ $books->render() }}
    
@endsection

