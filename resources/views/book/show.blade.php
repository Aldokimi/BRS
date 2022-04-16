@extends('layouts.main')

@section('content')


{{-- {{$book->borrows()->user_id}} --}}

<div class="container">
      <h3 class="fs-1 position-relative"> <p class="position-absolute top start-50 translate-middle">Book Details</p> </h3>
      <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
      <div class="container">
            <div class="row">
              <div class="col-3">
                  <div class="card text-dark border-success mb-4" style="max-width: 20rem;">
                        <div class="card-header">Title</div>
                        <div class="card-body">
                          <h4 class="card-title">{{ $book->title }}</h4>
                        </div>
                  </div>
              </div>
              <div class="col-3">
                  <div class="card text-dark border-success mb-4" style="max-width: 20rem;">
                        <div class="card-header">Author</div>
                        <div class="card-body">
                          <h4 class="card-title">{{ $book->author }}</h4>
                        </div>
                  </div>
              </div>
              <div class="col-3">
                  <div class="card text-dark border-success mb-4" style="max-width: 20rem;">
                        <div class="card-header">date of publish</div>
                        <div class="card-body">
                          <h4 class="card-title">{{ $book->released_at }}</h4>
                        </div>
                  </div>
              </div>
              <div class="col-3">
                  <div class="card text-dark border-success mb-4" style="max-width: 20rem;">
                        <div class="card-header">Book cover image </div>
                        <div class="card-body ">
                              <img style="width: 400px; height: 200px;" class="img-thumbnail" src="{{ $book->cover_image }}" alt="some image">
                        </div>
                  </div>
              </div>
            </div>
      </div>
      <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
      <h3 class="fs-1 position-relative"> <p class="position-absolute top start-50 translate-middle">Genres of the Book</p> </h3>
      <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
      <div class="container">
            <div class="row">
                  @foreach($book->genres as $genre)
                        <div class="col-3">
                              <div class="card {{ ($genre->style == 'light') ? 'text-black' : 'text-white' }} bg-{{ $genre->style }} mb-3" style="max-width: 20rem;">
                                    <div class="card-header"> {{ $genre->style }} </div>
                                    <div class="card-body">
                                          <h4 class="card-title"> <a href="{{ route('genres.show', ['genre' => $genre->id]) }}" class="list-group-item list-group-item-action"> {{ $genre->title }} </a> </h4>
                                    </div>
                              </div>
                        </div>
                  @endforeach
            </div>
        </div>

      <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
      
      @foreach($book->borrows as $rental)
      @if($rental->user_id == Auth::user()->id && $rental->status != 'RETURNED')
                  {{ $flag = "" }}
                  <div class="alert alert-dismissible alert-danger">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>Focus!</strong> <p>You cannot borrow this book because you have ongoing renatl on it!</p>
                  </div>
            @endif
      @endforeach
            
      <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
      <div class="container">
            <div class="row">
              <div class="col">
                  <form action="{{ route('books.edit', ['book' => $book->id]) }}" method="GET" class="d-inline">
                        @csrf
                        @method('GET')
                        <div class="d-grid gap-2">
                              <button type="submit" class="btn btn-lg btn-warning">Edit</button>
                        </div>
                  </form>
              </div>
              <div class="col">
                  <form action="{{ route('books.destroy', ['book' => $book->id]) }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <div class="d-grid gap-2">
                              <button type="submit" class="btn btn-lg btn-danger">Delete</button>
                        </div>
                  </form>
              </div>
              <div class="col">
                  
                  <form action="{{ route('rentals.store', ['book' => $book->id]) }}" method="POST" class="d-inline">
                        @csrf
                        <div class="d-grid gap-2">
                              <button type="submit" class="btn btn-lg btn-primary" @if(isset($flag) || isset($rented)) disabled @endif>Rent</button>
                        </div>
                  </form>
              </div>
            </div>
      </div>

</div>
@endsection