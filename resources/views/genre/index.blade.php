@extends('layouts.main')

@section('content')
{{-- 
{{$genres}} 
--}}

<div class="container">
    <h3 class="fs-1 position-relative"> <p class="position-absolute top start-50 translate-middle">Genres List</p> </h3>
    <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
    <div class="container">
        <div class="row">
            @foreach($genres as $genre)
                <div class="col-3">
                    <div class="card border-{{ $genre->style }} mb-3" style="max-width: 20rem;">
                        <div class="card-header">{{ $genre->style }}</div>
                        <div class="card-body">
                            <h4 class="card-title">{{ $genre->title }}</h4>
                        </div>

                    <form action="{{ route('genres.destroy', ['genre' => $genre->id]) }}" method="POST" class="m-2">
                        @csrf  
                
                        @method('delete')
                
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-lg btn-danger">Delete</button>
                        </div>
                    </form>

                    <form action="{{ route('genres.edit', ['genre' => $genre->id]) }}" method="POST" class="m-2">
                        @csrf  
                
                        @method('GET')
                
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-lg btn-primary">Edit</button>
                        </div>
                    </form>

                 </div>
                </div>

            @endforeach
            <div class="col">
                <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-lg btn-info" onclick="window.location='{{ route('genres.create', ['genre' => $genre->id]) }}'">Add genre</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

</div>
@endsection
