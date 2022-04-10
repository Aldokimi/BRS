@extends('layouts.main')

@section('content')
<div class="container">

      <h3 class="fs-1 position-relative"> <p class="position-absolute top start-50 translate-middle">List of Genres</p> </h3>
      <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
      <div class="border border-dark">
          <div class="p-1">
            <table class="table table-hover p-3" >
                <thead>
                <tr class="table-active">
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Date</th>
                    <th scope="col">description</th>
                </tr>
                </thead>
                <tbody>
                <tr class="table-light">
                    <th scope="row"><a href="#">Title</a></th>
                    <td>Author</td>
                    <td>Date</td>
                    <td>description blablablablabla</td>
                </tr>
                </tbody>
            </table>
          </div>
      </div>
      
</div>
@endsection