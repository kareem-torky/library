@extends('layout')

@section('title')
  Register
@endsection

@section('content')

@include('inc.errors')

<form method="POST" action="{{ route('auth.handleRegister') }}">

  @csrf

  <div class="form-group">
    <input type="text" name="name" class="form-control" placeholder="name" value="{{ old('name') }}">
  </div>

  <div class="form-group">
    <input type="text" name="email" class="form-control" placeholder="email" value="{{ old('email') }}">
  </div>

  <div class="form-group">
    <input type="password" name="pass" class="form-control" placeholder="password" value="{{ old('pass') }}">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection