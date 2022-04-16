@extends('layouts.main')

@section('content')
<div class="container">
    <h3 class="fs-1 position-relative"> <p class="position-absolute top start-50 translate-middle">Edit a book</p> </h3>
    <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
    <form action="{{ route('books.update', ['book' => $book->id]) }}" method="POST">
        @csrf  

        @method('PUT')
        

        <fieldset>

            <div class="form-group has-success">
                <label class="form-label mt-4" for="title"><legend>Title</legend></label>
                <input type="text" name="title" value="{{ $book->title }}" class="form-control @error('title') is-invalid @enderror">
                @error('name') <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>
              
            <div class="form-group has-danger">
                <label class="form-label mt-4" for="author"><legend>Author</legend></label>
                <input type="text" name="author" value="{{ $book->author }}" class="form-control @error('author') is-invalid @enderror">
                @error('author') <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>
            <div class="form-group has-success">
                <label class="form-label mt-4" for="released_at"><legend>Released at</legend></label>
                <input type="date" name="released_at" value="{{ $book->released_at }}" class="form-control @error('released_at') is-invalid @enderror">
                @error('released_at') <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>
              
            <div class="form-group has-danger">
                <label class="form-label mt-4" for="pages"><legend>Pages</legend></label>
                <input type="number" name="pages" value="{{ $book->pages }}" class="form-control @error('pages') is-invalid @enderror">
                @error('pages') <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>
            <div class="form-group has-success">
                <label class="form-label mt-4" for="ISBN"><legend>ISBN</legend></label>
                <input type="text" name="ISBN" value="{{ $book->isbn}}" class="form-control @error('ISBN') is-invalid @enderror">
                @error('ISBN') <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>
              
            <div class="form-group">
                <label for="description" class="form-label mt-4"><legend>Description</legend></label>
                <textarea name="description" value="{{ $book->description}}" class="form-control @error('description') is-invalid @enderror"></textarea>
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
                                    @if($book->genres->contains($genre)) checked @endif
                                >
                                <label class="custom-control-label" for="genre-{{ $genre->id }}">{{ $genre->title }}</label>
                            </div><br>
                        
                        </div>
                    @endforeach
                    
                </div>
            </div>

            <div class="form-group has-danger">
                <label class="form-label mt-4" for="in_stock"><legend>In Stock</legend></label>
                <input type="number" name="in_stock" value="{{ $book->in_stock }}" class="form-control @error('in_stock') is-invalid @enderror">
                @error('in_stock') <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>

            <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
            
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="d-grid gap-2">
                            @method('PUT')
                            <button type="submit" class="btn btn-primary">EDIT</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-danger">CANSLE</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </fieldset>
    </form>
</div>
@endsection
