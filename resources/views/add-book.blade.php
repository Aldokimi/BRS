@extends('layouts.main')

@section('content')
<div class="container">
    <h3 class="fs-1 position-relative"> <p class="position-absolute top start-50 translate-middle">Add a book</p> </h3>
    <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
    <form>
        <fieldset>
            <div class="form-group has-success">
                <label class="form-label mt-4" for="inputValid"><legend>Title</legend></label>
                <input type="text" value="correct value" class="form-control is-valid" id="inputValid">
                <div class="valid-feedback">Success! You've done it.</div>
            </div>
              
            <div class="form-group has-danger">
                <label class="form-label mt-4" for="inputInvalid"><legend>Author</legend></label>
                <input type="text" value="wrong value" class="form-control is-invalid" id="inputInvalid">
                <div class="invalid-feedback">Sorry, that username's taken. Try another?</div>
            </div>
            <div class="form-group has-success">
                <label class="form-label mt-4" for="inputValid"><legend>Released at</legend></label>
                <input type="date" value="correct value" class="form-control is-valid" id="inputValid">
                <div class="valid-feedback">Success! You've done it.</div>
            </div>
              
            <div class="form-group has-danger">
                <label class="form-label mt-4" for="inputInvalid"><legend>Pages</legend></label>
                <input type="number" value="wrong value" class="form-control is-invalid" id="inputInvalid">
                <div class="invalid-feedback">Sorry, that username's taken. Try another?</div>
            </div>
            <div class="form-group has-success">
                <label class="form-label mt-4" for="inputValid"><legend>ISBN</legend></label>
                <input type="text" value="correct value" class="form-control is-valid" id="inputValid">
                <div class="valid-feedback">Success! You've done it.</div>
            </div>
              
            <div class="form-group">
                <label for="exampleTextarea" class="form-label mt-4"><legend>Descroption</legend></label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
            </div>

            <fieldset class="form-group">
                <legend class="mt-4">Genres</legend>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Art
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                  <label class="form-check-label" for="flexCheckChecked">
                    Science
                  </label>
                </div>
            </fieldset>
            
            <div class="form-group has-danger">
                <label class="form-label mt-6" for="inputInvalid"><legend>Instock</legend></label>
                <input type="number" value="wrong value" class="form-control is-invalid" id="inputInvalid">
                <div class="invalid-feedback">Sorry, that username's taken. Try another?</div>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">ADD</button>
            </div>
        </fieldset>
    </form>
</div>
@endsection
