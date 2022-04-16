@extends('layouts.main')

@section('content')
<div class="container">

      <h3 class="fs-1 position-relative"> <p class="position-absolute top start-50 translate-middle">List of the 
          <strong>{{ $genre->title }}</strong> books</p> </h3>
      <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
      <div class="border border-dark">
          <div class="p-1">
            <table class="table table-hover p-3" >
                <thead>
                <tr class="table-active">
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Date</th>
                    <th scope="col">description</th>
                </tr>
                </thead>
                <tbody>
                @foreach($genre->books as $book)
                    <tr class="table-light">
                        <th scope="row"><a href="{{ route('books.show', ['book' => $book,]) }}">{{ $book->title }} </a></th>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->released_at }}</td>
                        <td>{{ $book->description }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
          </div>
      </div>
      
</div>
@endsection
