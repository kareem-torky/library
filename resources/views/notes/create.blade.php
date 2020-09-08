@extends('layout')

@section('title')
    Add note
@endsection

@section('content')

@include('inc.errors')

<form method="POST" action="{{ route('notes.store') }}">

  @csrf
 
  <div class="form-group">
    <textarea class="form-control" name="content" rows="3" placeholder="content">{{ old('content') }}</textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection