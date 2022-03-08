@extends('layout')

@section('content')
      <h3>{{ $title }}</h3>
      <table class="table table-light">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
          </tr>
        </thead>
        <tbody>
            @if(count($books) == 0)
                <td colspan="2">No data...</td>
            @endif

            @foreach ($books as $book)
            <tr>
                <td><a href="/book/{{ $book->id }}">{{ $book->title }}</a></td>
                <td>{{ $book->author }}</td>
              </tr>
            @endforeach
      </table>
      <div class="d-flex justify-content-center">
            {{ $books->links() }}
      </div>
@endsection