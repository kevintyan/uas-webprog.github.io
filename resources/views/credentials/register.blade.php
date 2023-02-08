@extends('template.main')

@section('main')

<div class="card mt-5 justify-content-center text-center w-50 m-auto">
    <div class="card-header bg-warning">
        <h3 class="fw-normal text-dark mt-2 text-align-center">Register Account</h3>
    </div>
    <div class="card-body">
        <main class="form-registration w-75 m-auto">
            <form action="/register" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating">
                    <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" id="floatingInput" placeholder="Name">
                    <label for="floatingInput">First Name</label>
                    @error('first_name')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="floatingInput" placeholder="Name">
                    <label for="floatingInput">Last Name</label>
                    @error('last_name')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                    @error('email')
                        <div class="invalid-feedback text-start mb=3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="hidden" name="role_id" class="d-none" value="2">
                    <input disabled type="text" class="form-control @error('role_id') is-invalid @enderror" id="floatingInput" placeholder="Name" value="User">
                    <label for="floatingInput">Role</label>
                    @error('role_id')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                {{-- <fieldset disabled>
                    <div class="form text-start">
                        <label for="disabledTextInput" class="form-label">Role</label>
                        <input type="name" name="role_id" class="form-control @error('role') is-invalid @enderror" id="floatingInput" placeholder="Name" value="2">
                    </div>
                </fieldset> --}}
                <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    @error('password')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Confirm Password</label>
                    @error('confirm_password')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label for="" class="form-label float-start @error('display_picture_link') is-invalid @enderror">Display Picture</label>
                <div class="input-group">
                    <input type="file" name="display_picture_link" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    @error('display_picture_link')
                    <div class="invalid-feedback text-start mb-3">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label float-start @error('gender_id') is-invalid @enderror">Gender</label>
                    <select id="" name="gender_id" class="form-select">
                    <option value="">Select Gender</option>
                    @foreach ($genders as $gender)
                    <option value="{{ $gender->id }}">{{ $gender->gender_desc }}</option>
                    @endforeach
                    </select>
                    @error('gender_id')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-warning" type="submit">Register</button>
            </form>
            <small class="">Have an account? <a href="/login" class="text-decoration-none">Login Here</a></small>
          </main>
    </div>
  </div>



@endsection


<style>
    .form-registration input {
        margin-bottom: 10px;
    }
</style>
