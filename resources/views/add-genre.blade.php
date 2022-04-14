@extends('layouts.main')

@section('content')
<div class="container">
    <h3 class="fs-1 position-relative"> <p class="position-absolute top start-50 translate-middle">Add a genre</p> </h3>
    <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
    <form>
        <fieldset>
            <div class="form-group has-success">
                <label class="form-label mt-4" for="inputValid"><legend>Name</legend></label>
                <input type="text" value="correct value" class="form-control is-valid" id="inputValid">
                <div class="valid-feedback">Success! You've done it.</div>
            </div>
              
            <div class="form-group">
                <label for="exampleSelect1" class="form-label mt-4">Style</label>
                <select class="form-select" id="exampleSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
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