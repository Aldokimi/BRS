@extends('layouts.main')

@section('content')
<div class="container">
    
    <div class="container">
        <div class="row">
          <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://s1.zerochan.net/Yuzuki.Yukari.600.3621347.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Number of Users</p><br>
                  <strong class="text-danger fs-1"> 9 </strong>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://s1.zerochan.net/Yuzuki.Yukari.600.3621347.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Number of Genres</p><br>
                  <strong class="text-danger fs-1"> 39 </strong>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://s1.zerochan.net/Yuzuki.Yukari.600.3621347.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Number of Books</p><br>
                  <strong class="text-danger fs-1"> 94 </strong>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="m-4 p-3" style="width: 20px; height: 20px"></div>

      <h3 class="fs-1 position-relative"> <p class="position-absolute top start-50 translate-middle">List of Genres</p> </h3>
      <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
      <div class="border border-dark">
          <div class="p-1">
            <table class="table table-hover p-3" >
                <thead>
                <tr class="table-active">
                    <th scope="col">Name</th>
                    <th scope="col">Style</th>
                </tr>
                </thead>
                <tbody>
                <tr class="table-light">
                    <th scope="row"><a href="#">Name</a></th>
                    <td>Primary</td>
                </tr>
                </tbody>
            </table>
          </div>
      </div>
      
</div>
@endsection
