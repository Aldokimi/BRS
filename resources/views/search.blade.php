@extends('layouts.main')

@section('content')
<div class="container">
    <h3 class="fs-1 position-relative"> <p class="position-absolute top start-50 translate-middle">Search for a book</p> </h3>
      <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
    <div class="d-grid gap-2">
        <form class="d-flex">
            <input class="form-control me-sm-2" type="text" placeholder="Enter a book title or an auther name ... ">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>  
    </div>
    <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">book title</th>
            <th scope="col">author</th>
            <th scope="col">date</th>
            <th scope="col">description</th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-success">
            <th scope="row">Zanad albahr</th>
            <td>zabad</td>
            <td>2002</td>
            <td>Column content</td>
          </tr>
        </tbody>
    </table>
</div>
@endsection
