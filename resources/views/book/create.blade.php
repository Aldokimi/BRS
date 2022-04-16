@extends('layouts.main')

@section('content')
<div class="container">

    
    <h3 class="fs-1 position-relative"> <p class="position-absolute top start-50 translate-middle">Add a book</p> </h3>
    <div class="m-4 p-3" style="width: 20px; height: 20px"></div>


    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        
        <fieldset>

            <div class="form-group has-success">
                <label class="form-label mt-4" for="title"><legend>Title</legend></label>
                <input type="text" name="title" value="{{ old('title', '') }}" class="form-control @error('title') is-invalid @enderror">
                @error('name') <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>
              
            <div class="form-group has-danger">
                <label class="form-label mt-4" for="author"><legend>Author</legend></label>
                <input type="text" name="author" value="{{ old('author', '') }}" class="form-control @error('author') is-invalid @enderror">
                @error('author') <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>
            <div class="form-group has-success">
                <label class="form-label mt-4" for="released_at"><legend>Released at</legend></label>
                <input type="date" name="released_at" value="{{ old('released_at', '') }}" class="form-control @error('released_at') is-invalid @enderror">
                @error('released_at') <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>
              
            <div class="form-group has-danger">
                <label class="form-label mt-4" for="pages"><legend>Pages</legend></label>
                <input type="number" name="pages" value="{{ old('pages', '') }}" class="form-control @error('pages') is-invalid @enderror">
                @error('pages') <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>
            <div class="form-group has-success">
                <label class="form-label mt-4" for="ISBN"><legend>ISBN</legend></label>
                <input type="text" name="ISBN" value="{{ old('ISBN', '') }}" class="form-control @error('ISBN') is-invalid @enderror">
                @error('ISBN') <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>
              
            <div class="form-group">
                <label for="description" class="form-label mt-4"><legend>Description</legend></label>
                <textarea name="description" value="{{ old('description', '') }}" class="form-control @error('description') is-invalid @enderror"></textarea>
                @error('description') <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>

            <div class="container">
                <legend class="mt-4">Genres</legend>
                <div class="row">

                    @foreach($genres as $genre)
                        <div class="col-4">
                            <div class="custom-control custom-switch col-sm-2">
                            <input type="checkbox" class="custom-control-input" 
                                name="genres[]"
                                id="genre-{{$genre->id}}"
                                value="{{$genre->id}}"
                            >
                            <label class="custom-control-label" for="genre-{{$genre->id}}">{{$genre->title}}</label>
                            </div><br>
                        
                        </div>
                    @endforeach
                    
                </div>
            </div>

            <div class="form-group has-danger">
                <label class="form-label mt-4" for="in_stock"><legend>In Stock</legend></label>
                <input type="number" name="in_stock" value="{{ old('in_stock', '') }}" class="form-control @error('in_stock') is-invalid @enderror">
                @error('in_stock') <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>

            <div class="m-4 p-3" style="width: 20px; height: 20px"></div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">ADD</button>
            </div>
            
        </fieldset>
    </form>
</div>
@endsection
