@extends('layout')

@section('content')
      <h3>{{ $title }}</h3>

      <p>Title : {{ $book->title }}</p>
      <p>Author : {{ $book->author }}</p>
      <p>Publisher : {{ $book->publisher }}</p>
      <p>Year : {{ $book->year }}</p>
      <p>Description :</p>
      <p>{{ $book->description }}</p>
@endsection