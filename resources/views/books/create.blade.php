@extends('layout')

@section('title')
    Create book
@endsection

@section('content')

@include('inc.errors')

<form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data">

  @csrf

  <div class="form-group">
    <input type="text" name="title" class="form-control" placeholder="title" value="{{ old('title') }}">
  </div>
  
 
  <div class="form-group">
    <textarea class="form-control" name="desc" rows="3" placeholder="description">{{ old('desc') }}</textarea>
  </div>

  <div class="form-group">
    <input type="file" class="form-control-file" name="img">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection