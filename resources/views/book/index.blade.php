@extends('layouts.main')

@section('content')
<div class="container">
    <h3 class="fs-1 position-relative"> <p class="position-absolute top start-50 translate-middle">Search for a book</p> </h3>
      <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
    <div class="d-grid gap-2">
        <form class="d-flex" method="GET" action="#">
            @csrf
            <input  class="form-control me-sm-2" 
                    type="text" 
                    name="search" 
                    value="{{ request('search') }}"
                    placeholder="Enter a book title or an auther name ... ">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Book Title</th>
            <th scope="col">Author</th>
            <th scope="col">Realse Date</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
          @foreach($books as $book)
            <tr class="table-success">
              <th scope="row"><a href="{{ route('books.show', ['book' => $book->id]) }}">{{ $book->title }}</a></th>
              <td>{{ $book->author }}</td>
              <td>{{ $book->released_at }}</td>
              <td>{{ $book->description }}</td>
            </tr>
          @endforeach
        </tbody>
    </table>
</div>
@endsection
