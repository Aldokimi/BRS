@extends('layouts.main')

@section('content')
<div class="container">

    <h3 class="fs-1 position-relative"> <p class="position-absolute top start-50 translate-middle">My Rentals</p> </h3>
    <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
    <ul class="nav nav-tabs" id="tabButtons">
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#bending">BENDING</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#returned">RETURNED</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#rejected">REJECTED</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#beforeDeadline">ACCEPTED BEFORE DEADLINE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#afterDeadline">ACCEPTED AFTER DEADLINE</a> 
        </li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active show" id="bending">
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
                    <th scope="row">Bending</th>
                    <td>zabad</td>
                    <td>2002</td>
                    <td>Column content</td>
                  </tr>
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
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-success">
                    <th scope="row">returned</th>
                    <td>zabad</td>
                    <td>2002</td>
                    <td>Column content</td>
                  </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade hidden show" id="rejected">
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
                    <th scope="row">rejected</th>
                    <td>zabad</td>
                    <td>2002</td>
                    <td>Column content</td>
                  </tr>
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
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-success">
                    <th scope="row">before Deadline</th>
                    <td>zabad</td>
                    <td>2002</td>
                    <td>Column content</td>
                  </tr>
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
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-success">
                    <th scope="row">after Deadline</th>
                    <td>zabad</td>
                    <td>2002</td>
                    <td>Column content</td>
                  </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        let tap = document.getElementById('myTabContent');
        let taps = [...tap.childNodes];
        let buttons = document.getElementById('tabButtons');
        let buttonsList = []
        [...buttons.childNodes].forEach(child => {
            buttonsList.push(child.firstElementChild);
        });
        buttonsList.forEach(btn => {
            btn.addEventListener('click', ()->{
                taps.forEach(elemTap => {
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