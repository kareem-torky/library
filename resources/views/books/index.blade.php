@extends('layout')

@section('title')
    All books
@endsection

@section('content')

<input type="text" id="keyword">

@auth 

<h1>Notes:</h1>
@foreach(Auth::user()->notes as $note)
  <p>{{ $note->content }}</p>
@endforeach

<a href="{{ route('notes.create') }}" class="btn btn-info">Add new note</a>

@endauth


<h1>All books</h1>

@auth
<a class="btn btn-primary" href="{{ route('books.create') }}">Create</a>
@endauth

<div id="allBooks">
@foreach($books as $book)

{{-- <a href="{{ route('books.show', $book->id) }}"> --}}
  <h3>{{ $book->title }}</h3>
{{-- </a> --}}

<p>{{ $book->desc }}</p>

{{-- @auth
  @if(Auth::user()->is_admin == 1)
    <a class="btn btn-danger" href="{{ route('books.delete', $book->id) }}">Delete</a>
  @endif
@endauth --}}

@endforeach
</div>

{{-- {{ $books->render() }} --}}
    
@endsection

@section('scripts')
<script>
  $('#keyword').keyup(function(){
    let keyword = $(this).val()
    let url = "{{ route('books.search') }}" + "?keyword=" + keyword

    $.ajax({
      type: "GET", 
      url: url,
      contentType: false,
      processData: false,
      success: function (data) 
      {
        $('#allBooks').empty() 

        for (book of data) {
          $('#allBooks').append(`
            <h3>${book.title}</h3>
            <p>${book.desc}</p>
          `)
        }
      }
    })
  })
</script>
@endsection