@extends('layout')

@section('title')
  Edit book - {{ $book->title }}
@endsection

@section('content')
<form method="POST" action="{{ route('books.update', $book->id) }}">

  @csrf

  <div class="form-group">
    <input type="text" name="title" class="form-control" placeholder="title" value="{{ $book->title }}">
  </div>
  
 
  <div class="form-group">
    <textarea class="form-control" name="desc" rows="3" placeholder="description">{{ $book->desc }}</textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection