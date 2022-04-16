@extends('layouts.main')

@section('content')
<div class="container">
    <h3 class="fs-1 position-relative"> <p class="position-absolute top start-50 translate-middle">Edit a genre</p> </h3>
    <div class="m-4 p-3" style="width: 20px; height: 20px"></div>



    <form action="{{ route('genres.store') }}" method="POST">
        <fieldset>
            @csrf

            <div class="form-group">
                <label for="title" class="form-label mt-4"><legend>Title</legend></label>
                <input name="title" value="{{ old('title', '') }}" class="form-control @error('title') is-invalid @enderror">
                @error('title') <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>

            <div class="container">
                <legend class="mt-4">Choose a style</legend>
                <div class="row">

                    @foreach($styles as $style)
                        <div class="col-4">
                            <div class="custom-control custom-switch col-sm-2">
                                <input type="radio" class="custom-control-input" 
                                    name="style"
                                    id="style-{{$style}}"
                                    value="{{$style}}"
                                >
                                <label class="custom-control-label" for="style-{{ $style }}">{{ $style }}</label>
                            </div><br>
                        
                        </div>
                    @endforeach
                    
                </div>
            </div>


            <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
            <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
            
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">ADD</button>
            </div>
        </fieldset>
    </form>
</div>
@endsection