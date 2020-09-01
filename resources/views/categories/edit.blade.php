@extends('layout')

@section('title')
  Edit category - {{ $category->name }}
@endsection

@section('content')

@include('inc.errors')

<form method="POST" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">

  @csrf

  <div class="form-group">
    <input type="text" name="name" class="form-control" placeholder="name" value="{{ old('name') ?? $category->name }}">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection