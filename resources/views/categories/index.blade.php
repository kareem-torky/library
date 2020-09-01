@extends('layout')

@section('title')
    All categories
@endsection

@section('content')

<h1>All categories</h1>

<a class="btn btn-primary" href="{{ route('categories.create') }}">Create</a>

@foreach($categories as $category)

<hr>
<a href="{{ route('categories.show', $category->id) }}">
  <h3>{{ $category->name }}</h3>
</a>

<a class="btn btn-danger" href="{{ route('categories.delete', $category->id) }}">Delete</a>

@endforeach

{{ $categories->render() }}
    
@endsection

