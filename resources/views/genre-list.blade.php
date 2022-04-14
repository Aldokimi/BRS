@extends('layouts.main')

@section('content')
<div class="container">
    <h3 class="fs-1 position-relative"> <p class="position-absolute top start-50 translate-middle">Genres List</p> </h3>
    <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card border-success mb-3" style="max-width: 20rem;">
                    <div class="card-header">Genre name</div>
                    <div class="card-body">
                      <h4 class="card-title">Style</h4>
                      <p class="card-text">Some style</p>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-lg btn-primary">Edit</button>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-lg btn-danger">Delete</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-lg btn-info">Add genre</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

</div>
@endsection
