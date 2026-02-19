{{-- Message --}}
@if (Session::has('Success'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Success !</strong> {{ session('Success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (Session::has('Error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error !</strong> {{ session('Error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
