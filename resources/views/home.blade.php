@extends('layouts.main')

@section('content')
<div class="container">
    
    <div class="container">
        <div class="row">
          <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://s1.zerochan.net/Yuzuki.Yukari.600.3621347.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Number of Users</p><br>
                  <strong class="text-danger fs-1"> {{ $numberOfUsers }}</strong>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://s1.zerochan.net/Yuzuki.Yukari.600.3621347.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Number of Genres</p><br>
                  <strong class="text-danger fs-1"> {{ count($genres) }}</strong>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://s1.zerochan.net/Yuzuki.Yukari.600.3621347.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Number of Books</p><br>
                  <strong class="text-danger fs-1"> {{ $numberOfBooks }} </strong>
                </div>
            </div>
          </div>
        </div>
      </div>
      
      
      <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
      
      <h3 class="fs-1 position-relative"> <p class="position-absolute top start-50 translate-middle">Search for a book</p> </h3>
      <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
      <form class="d-flex">
        <form class="d-flex" method="PUT" action="#">
          @csrf
          <input  class="form-control me-sm-2" 
                  type="text" 
                  name="search" 
                  value="{{ request('search') }}"
                  placeholder="Search for a book ... ">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form> 
      <div class="m-4 p-3" style="width: 20px; height: 20px"></div>

      <h3 class="fs-1 position-relative"> <p class="position-absolute top start-50 translate-middle">List of Genres</p> </h3>
      <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
      
      <div class="container">
        <div class="row">

          @foreach($genres as $genre)
            <div class="col-4">
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
      
      
</div>
@endsection
