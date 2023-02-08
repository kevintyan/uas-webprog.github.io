@extends('template.main')

@section('main')




<div class="card mt-5 justify-content-center text-center w-50 m-auto">
    <div class="card-header bg-warning">
        <h3 class="fw-normal text-dark mt-2 text-align-center">Account Setting</h3>
    </div>
    <div class="card-body">
        <main class="form-registration w-75 m-auto">
            <form action="/profile/update" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating">
                    <input type="hidden" name="id" class="form-control @error('id') is-invalid @enderror" id="floatingInput" placeholder="Name" value="{{ $user->id }}">
                    {{-- <label for="floatingInput">Last Name</label> --}}
                    @error('last_name')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                <div class="form-floating">
                    <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" id="floatingInput" placeholder="Name" value="{{ $user->first_name }}">
                    <label for="floatingInput">First Name</label>
                    @error('first_name')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="floatingInput" placeholder="Name" value="{{ $user->last_name }}">
                    <label for="floatingInput">Last Name</label>
                    @error('last_name')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{ $user->email }}">
                    <label for="floatingInput">Email address</label>
                    @error('email')
                        <div class="invalid-feedback text-start mb=3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="hidden" name="role_id" class="d-none" value="{{ $user->role_id }}">
                    <input disabled type="text" class="form-control @error('role_id') is-invalid @enderror" id="floatingInput" placeholder="Name" value="{{ $user->role->role_name }}">
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
                        <input type="name" name="role" class="form-control @error('role') is-invalid @enderror" id="floatingInput" placeholder="Name" value="{{ $user->role->role_name }}">
                    </div>
                </fieldset> --}}
                <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" value="{{ $user->password }}">
                    <label for="floatingPassword">Password</label>
                    @error('password')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" id="floatingPassword" placeholder="Password" value="{{ $user->password }}">
                    <label for="floatingPassword">Confirm Password</label>
                    @error('confirm_password')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label for="" class="form-label float-start @error('gender') is-invalid @enderror">Display Picture</label>
                <div class="col-lg-3 mb-2">
                    <img src="{{ asset('storage/'. $user->display_picture_link) }}" alt="" style="width: 300px; height: 400px">
                </div>
                <div class="input-group">
                    <input type="file" name="display_picture_link" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" value="{{ $user->display_picture_link }}">
                    @error('display_picture_link')
                    <div class="invalid-feedback text-start mb-3">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label float-start @error('gender_id') is-invalid @enderror">Gender</label>
                    <select id="" name="gender_id" class="form-select">
                    @foreach ($genders as $gender)
                    @if ($gender->id == $user->gender_id)
                    <option value="{{ $gender->id }}">{{ $gender->gender_desc }}</option>
                    @else
                    <option value="{{ $gender->id }}">{{ $gender->gender_desc }}</option>
                    @endif
                    @endforeach
                    </select>
                    @error('gender_id')
                        <div class="invalid-feedback text-start mb-3">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-warning" type="submit">Save</button>
            </form>
          </main>
    </div>
  </div>



@endsection


<style>
    .form-registration input {
        margin-bottom: 10px;
    }
</style>
