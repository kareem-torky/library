@extends('layout')

@section('title')
    Create book
@endsection

@section('content')
<form method="POST" action="{{ route('books.store') }}">

  @csrf

  <div class="form-group">
    <input type="text" name="title" class="form-control" placeholder="title">
  </div>
  
 
  <div class="form-group">
    <textarea class="form-control" name="desc" rows="3" placeholder="description"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection