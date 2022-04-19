@extends('layouts.main')

@section('content')
<div class="container">
    <h3 class="fs-1 position-relative"> <p class="position-absolute top start-50 translate-middle">Rental Details</p> </h3>
    <div class="m-4 p-3" style="width: 20px; height: 20px"></div>

    <div class="container">
        <div class="row">
          <div class="col">
            <div class="card border-success mb-5" style="max-width: 20rem;">
                <div class="card-header">Book Details</div>
                <div class="card-body">
                  <h4 class="card-title">Title</h4>
                  <p class="card-text">
                    {{ $rental->book->title }}
                  </p>
                  <h4 class="card-title">Author</h4>
                  <p class="card-text">{{ $rental->book->author }}</p>
                  <h4 class="card-title">Release Date</h4>
                  <p class="card-text">{{ $rental->book->released_at }}</p>
                  <div class="d-grid gap-2">
                    <button type="button" class="btn btn-lg btn-success" onclick="window.location='{{ route('books.show', ['book' => $rental->book->id]) }}'">Show Book</button>
                  </div>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-success mb-5" style="max-width: 20rem;">
                <div class="card-header">Rental Data</div>
                <div class="card-body">
                  <h4 class="card-title">Name of reader</h4>
                  <p class="card-text">{{ $rental->user->name }}</p>
                  <h4 class="card-title">Date of rental</h4>
                  <p class="card-text">{{ $rental->created_at}}</p>
                  <h4 class="card-title">status</h4>
                  <p class="card-text">{{ $rental->status}}</p>
                  @if($rental->status == 'PENDING')
                    <ul class="list-group list-group-flush">{{-- if bending --}}
                      Requested at:
                      @if($rental->request_processed_at != null)
                        <li class="list-group-item">{{ $rental->request_processed_at }}</li><br>
                      @else
                        <li class="list-group-item">Not Decided Yet!</li><br>
                      @endif
                      Request Managed by: 
                      @if($rental->return_managed_by != null)
                        <li class="list-group-item">{{ $users->find($rental->return_managed_by)->name }}</li>
                        @else
                          <li class="list-group-item">Not Decided Yet!</li><br>
                      @endif
                    </ul>
                  @endif
                  @if($rental->status == 'RETURNED')
                    <ul class="list-group list-group-flush">{{-- if returned --}}
                      Returned at:
                      @if($rental->returned_at != null)
                        <li class="list-group-item">{{ $rental->returned_at }}</li><br>
                        @else
                          <li class="list-group-item">Not Decided Yet!</li><br>
                      @endif
                      Return Managed by: 
                      @if($rental->return_managed_by != null)
                        <li class="list-group-item">{{ $users->find($rental->return_managed_by)->name }}</li>
                        @else
                          <li class="list-group-item">Not Decided Yet!</li><br>
                      @endif
                    </ul>
                  @endif
                </div>
            </div>
          </div>
          <div class="col">

            @auth
            @if (Auth::user()->is_librarian)
            <div class="card border-success mb-3" style="max-width: 20rem;">
              <div class="card-header">Settings</div>
              <div class="card-body">
                <div class="container">
                  <div class="row">
                      <form action="{{ route('rentals.update', ['rental' => $rental->id]) }}" method="POST">
                          @csrf  
                  
                          @method('PUT')
                          <legend class="mt-4">Change the Status</legend>
                          @foreach($statusList as $st)
                              <div class="col-4">
                                <div class="custom-control custom-switch col-sm-2">
                                  <input type="radio" class="custom-control-input" 
                                      name="status"
                                      id="status-{{$st}}"
                                      value="{{$st}}"
                                      @if($rental->status == $st) checked @endif
                                  >
                                  <label class="custom-control-label" for="status-{{$st}}">{{$st}}</label>
                                </div>
                              </div>
                          @endforeach
                          <br>
                          <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-lg btn-primary">Change</button>
                          </div>
                      </form>     
                    </div>
    
                    <div class="row">
                      <div class="col">
                        <form action="{{ route('rentals.update', ['rental' => $rental->id]) }}" method="POST">
                          @csrf  
                  
                          @method('PUT')
                  
                              <div class="form-group has-success">
                                  <label class="form-label mt-4" for="deadline"><legend>Change the Deadlien</legend></label>
                                  <input type="date" name="deadline" value="{{ $rental->deadline }}" class="form-control @error('deadline') is-invalid @enderror">
                                  @error('deadline') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                              </div>
    
                              <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-lg btn-primary">Change</button>
                              </div>
                        </form>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            @endif
            @endauth

          </div>
        </div>
      </div>
</div>
@endsection
