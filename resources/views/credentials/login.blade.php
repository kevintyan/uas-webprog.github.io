@extends('template.main')

@section('main')

@if (session()->has('success'))
<div class="row mt-3">
    <div class="d-flex justify-content-center">
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    </div>
</div>
@elseif (session()->has('failed'))
<div class="row mt-3">
    <div class="d-flex justify-content-center">
        <div class="alert alert-danger col-lg-8" role="alert">
            {{ session('failed') }}
        </div>
    </div>
</div>
@endif


<div class="card mt-5 justify-content-center text-center w-50 m-auto">
    <div class="card-header bg-warning">
        <h3 class="fw-normal text-dark mt-2 text-align-center">Login</h3>
    </div>
    <div class="card-body">
        <main class="form-registration w-75 m-auto">
            <form action="/login" method="POST">
                @csrf
              <div class="form-floating mb-2">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-2">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              {{-- <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" name="password" value="remember-me"> Remember me
                </label>
              </div> --}}
              <button class="w-100 btn btn-lg btn-warning mb-2" type="submit">Submit</button>
            </form>
            <small class="">Don't have an account? <a href="/register" class="text-decoration-none">Register now</a></small>
          </main>
    </div>
  </div>

@endsection
