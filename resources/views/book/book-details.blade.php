@extends('layouts.main')

@section('content')
<div class="container">
      <h3 class="fs-1 position-relative"> <p class="position-absolute top start-50 translate-middle">Book Details</p> </h3>
      <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
      <div class="container">
            <div class="row">
              <div class="col">
                  <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                        <div class="card-header">Title</div>
                        <div class="card-body">
                          <h4 class="card-title">Title</h4>
                        </div>
                  </div>
              </div>
              <div class="col">
                  <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                        <div class="card-header">Author</div>
                        <div class="card-body">
                          <h4 class="card-title">someone</h4>
                        </div>
                  </div>
              </div>
              <div class="col">
                  <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                        <div class="card-header">Genre</div>
                        <div class="card-body">
                          <h4 class="card-title">Sone genre</h4>
                        </div>
                  </div>
              </div>
              <div class="col">
                  <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                        <div class="card-header">date of publish</div>
                        <div class="card-body">
                          <h4 class="card-title">date of publish</h4>
                        </div>
                  </div>
              </div>
            </div>
      </div>
      <div class="card mb-3">
            <h3 class="card-header">Book cover</h3>
            <img style="width: 400px; height: 400px;" src="data:image/jpeg;base64,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" alt="some image">
      </div>
      <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
      <div class="container">
            <div class="row">
              <div class="col">
                  <div class="d-grid gap-2">
                        <button type="button" class="btn btn-lg btn-primary">Edit</button>
                  </div>
              </div>
              <div class="col">
                  <div class="d-grid gap-2">
                        <button type="button" class="btn btn-lg btn-danger">Delete</button>
                  </div>
              </div>
              <div class="col">
                  <div class="d-grid gap-2">
                        <button type="button" class="btn btn-lg btn-info">Ongoing Rentals</button>
                  </div>
              </div>
              <div class="col">
                  <div class="d-grid gap-2">
                        <button type="button" class="btn btn-lg btn-dark">Borrow Book</button>
                  </div>
              </div>
            </div>
      </div>

</div>
@endsection