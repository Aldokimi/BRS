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
                  <p class="card-text">Zabad</p>
                  <h4 class="card-title">Author</h4>
                  <p class="card-text">Zabad</p>
                  <h4 class="card-title">Date</h4>
                  <p class="card-text">2002</p>
                  <div class="d-grid gap-2">
                    <button type="button" class="btn btn-lg btn-success">Show Book</button>
              </div>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-success mb-5" style="max-width: 20rem;">
                <div class="card-header">Rental Data</div>
                <div class="card-body">
                  <h4 class="card-title">Name of reader</h4>
                  <p class="card-text">Zabad</p>
                  <h4 class="card-title">Date of rental</h4>
                  <p class="card-text">2002</p>
                  <h4 class="card-title">status</h4>
                  <p class="card-text">Statis</p>
                  <ul class="list-group list-group-flush">{{-- if bending --}}
                    <li class="list-group-item">Date of procession</li>
                    <li class="list-group-item">Libraras name</li>
                  </ul>
                  <ul class="list-group list-group-flush">{{-- if returned --}}
                    <li class="list-group-item">Date of returning</li>
                    <li class="list-group-item">Libraras name</li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col">
              <div class="d-grid gap-2">
                    <button type="button" class="btn btn-lg btn-primary">Change status</button>
              </div>
          </div>
          <div class="col">
              <div class="d-grid gap-2">
                    <button type="button" class="btn btn-lg btn-info">Set deadline</button>
              </div>
          </div>
        </div>
      </div>
</div>
@endsection
