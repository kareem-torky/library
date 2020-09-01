@extends('layout')

@section('title')
  Login
@endsection

@section('content')

@include('inc.errors')

<form method="POST" action="{{ route('auth.handleLogin') }}">

  @csrf

  <div class="form-group">
    <input type="text" name="email" class="form-control" placeholder="email" value="{{ old('email') }}">
  </div>

  <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="password" value="{{ old('password') }}">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection