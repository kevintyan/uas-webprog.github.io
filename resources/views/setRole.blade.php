@extends('template.main')

@section('main')




<div class="card mt-5 justify-content-center text-center w-50 m-auto">
    <div class="card-header bg-warning">
        <h3 class="fw-normal text-dark mt-2 text-align-center">Account Setting</h3>
    </div>
    <div class="card-body">
        <main class="form-registration w-75 m-auto">
            <form action="/manage/role/update" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" class="form-control @error('id') is-invalid @enderror" id="floatingInput" placeholder="Name" value="{{ $user->id }}">
                <div class="mb-3">
                    <label for="" class="form-label float-start @error('gender_id') is-invalid @enderror">Role</label>
                    <select id="" name="role_id" class="form-select">
                    @foreach ($roles as $role)
                    @if ($role->id === $user->role_id)
                    <option value="{{ $role->id }}" selected>{{ $role->role_name }}</option>
                    @else
                    <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                    @endif
                    @endforeach
                    </select>
                    @error('role_id')
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
