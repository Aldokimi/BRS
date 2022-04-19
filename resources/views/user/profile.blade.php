@extends('layouts.main')

@section('content')
<div class="container">

    <div class="card mb-3">
        <h3 class="card-header">{{ $user->name }}</h3>
        <div class="card-body">
            <h5 class="card-title">Email Address</h5>
            <h6 class="card-subtitle text-muted">{{ $user->email }}</h6>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" 
             width="100%" height="200" aria-label="Placeholder: Image cap" 
             focusable="false" role="img" preserveAspectRatio="xMidYMid slice" 
             viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle"
             >
            <rect width="100%" height="100%" fill="#000000"></rect>
            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">
                @if($user->is_librarian)
                    Role of Librarian
                @else
                    Role of Reader
                @endif
            </text>
        </svg>
        <div class="card-footer text-muted"></div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Legial name</h4>
            <h6 class="card-subtitle mb-2 text-muted">{{ $user->name }}</h6>
        </div>
    </div>

</div>
@endsection
