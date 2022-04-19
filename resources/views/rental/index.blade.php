@extends('layouts.main')

@section('content')
<div class="container">

    <h3 class="fs-1 position-relative"> <p class="position-absolute top start-50 translate-middle">List of Rentals</p> </h3>
    <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
    <ul class="nav nav-tabs" id="tabButtons">
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" href="#bending">BENDING</button>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#returned">RETURNED</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#requests">REJECTED REQUESTS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#beforeDeadline">ACCEPTED IN TIME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#afterDeadline">ACCEPTED AFTER DEADLINE</a> 
        </li>
    </ul>
    <div id="myTabContent" class="tab-content">
      
          <div class="tab-pane fade active show" id="bending">
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Book Title</th>
                      <th scope="col">Author</th>
                      <th scope="col">Releasing Date</th>
                      <th scope="col">Description</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @forEach($rentals as $rental)
                      @if($rental->status == 'PENDING')
                        <tr class="table-success">
                          <th scope="row"><a href="{{ route('books.show', ['book' => $rental->book->id]) }}">{{ $rental->book->title }}</th>
                          <td>{{ $rental->book->author }}</td>
                          <td>{{ $rental->book->released_at }}</td>
                          <td>{{ $rental->book->description }}</td>
                          <td>
                              <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-lg btn-info" onclick="window.location='{{ route('rentals.show', ['rental' => $rental->id])}}'">SHOW RENTAL</button>
                              </div>
                          </td>
                        </tr>
                      @endif
                    @endforeach
                  </tbody>
              </table>
          </div>
          <div class="tab-pane fade hidden show" id="returned">
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">book title</th>
                      <th scope="col">author</th>
                      <th scope="col">date</th>
                      <th scope="col">description</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @forEach($rentals as $rental)
                      @if($rental->status == 'RETURNED')
                        <tr class="table-success">
                          <th scope="row"><a href="{{ route('books.show', ['book' => $rental->book->id]) }}">{{ $rental->book->title }}</th>
                          <td>{{ $rental->book->author }}</td>
                          <td>{{ $rental->book->released_at }}</td>
                          <td>{{ $rental->book->description }}</td>
                          <td>
                            <div class="d-grid gap-2">
                                  <button type="submit" class="btn btn-lg btn-info" onclick="window.location='{{ route('rentals.show', ['rental' => $rental->id])}}'">SHOW RENTAL</button>
                            </div>
                          </td>
                        </tr>
                      @endif
                    @endforeach
                  </tbody>
              </table>
          </div>
          <div class="tab-pane fade hidden show" id="requests">
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">book title</th>
                      <th scope="col">author</th>
                      <th scope="col">date</th>
                      <th scope="col">description</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @forEach($rentals as $rental)
                      @if($rental->status == 'REJECTED')
                        <tr class="table-success">
                          <th scope="row"><a href="{{ route('books.show', ['book' => $rental->book->id]) }}">{{ $rental->book->title }}</th>
                          <td>{{ $rental->book->author }}</td>
                          <td>{{ $rental->book->released_at }}</td>
                          <td>{{ $rental->book->description }}</td>
                          <td>
                            <div class="d-grid gap-2">
                              <button type="submit" class="btn btn-lg btn-info" onclick="window.location='{{ route('rentals.show', ['rental' => $rental->id])}}'">SHOW RENTAL</button>
                            </div>
                          </td>
                        </tr>
                      @endif
                    @endforeach
                  </tbody>
              </table>
          </div>
        <div class="tab-pane fade hidden show" id="beforeDeadline">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">book title</th>
                <th scope="col">author</th>
                <th scope="col">date</th>
                <th scope="col">description</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @forEach($rentals as $rental)
                @if($rental->status == 'RETURNED' && $rental->returned_at < $rental->deadline)
                  <tr class="table-success">
                    <th scope="row"><a href="{{ route('books.show', ['book' => $rental->book->id]) }}">{{ $rental->book->title }}</th>
                      <td>{{ $rental->book->author }}</td>
                      <td>{{ $rental->book->released_at }}</td>
                      <td>{{ $rental->book->description }}</td>
                      <td>
                        <div class="d-grid gap-2">
                              <button type="submit" class="btn btn-lg btn-info" onclick="window.location='{{ route('rentals.show', ['rental' => $rental->id])}}'">SHOW RENTAL</button>
                        </div>
                      </td>
                    </tr>
                  @endif
              @endforeach
            </tbody>
         </table>
        </div>
        <div class="tab-pane fade hidden show" id="afterDeadline">
          <table class="table table-hover">
            <thead>
                <tr>
                  <th scope="col">book title</th>
                  <th scope="col">author</th>
                  <th scope="col">date</th>
                  <th scope="col">description</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @forEach($rentals as $rental)
                  @if($rental->status == 'RETURNED' && $rental->returned_at >= $rental->deadline)
                    <tr class="table-success">
                      <th scope="row"><a href="{{ route('books.show', ['book' => $rental->book->id]) }}">{{ $rental->book->title }}</th>
                      <td>{{ $rental->book->author }}</td>
                      <td>{{ $rental->book->released_at }}</td>
                      <td>{{ $rental->book->description }}</td>
                      <td>
                        <div class="d-grid gap-2">
                              <button type="submit" class="btn btn-lg btn-info" onclick="window.location='{{ route('rentals.show', ['rental' => $rental->id])}}'">SHOW RENTAL</button>
                        </div>
                      </td>
                    </tr>
                  @endif
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
    <script>
        let tap = document.getElementById('myTabContent');
        let buttons = document.getElementById('tabButtons');

        let buttonsList = []
        cnt = 0;
        buttons.childNodes.forEach(child => {
            if(cnt % 2 == 1){
              buttonsList.push(child.firstElementChild);
            } 
            cnt++;
        });
        
        let tapsList    = []
        cnt = 0;
        tap.childNodes.forEach(child => {
            if(cnt % 2 == 1){
              tapsList.push(child);
            } 
            cnt++;
        });
        
        buttonsList.forEach(btn => {
          btn.addEventListener('click', function(){
            tapsList.forEach(elemTap => {

              if(btn.getAttribute('href').substring(1) == elemTap.id){
                  btn.classList.remove('active');
                  elemTap.classList.remove('hidden');
                  elemTap.classList.add('active');
              }else{
                  if(!btn.classList.contains('active')){
                      btn.classList.add('active');
                  }
                  if(elemTap.classList.contains('active')){
                      elemTap.classList.remove('active');
                      elemTap.classList.add('hidden');
                  }
              }

            });
          })
        });
    </script>
      
</div>
@endsection