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
@elseif (session()->has('delete'))
<div class="row mt-3">
    <div class="d-flex justify-content-center">
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('delete') }}
        </div>
    </div>
</div>
@endif

<table class="table mt-3 text-center">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Full Name</th>
        <th scope="col">Role</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
          <th scope="row">{{ $user->id }}</th>
          <td>{{ $user->first_name }}  {{ $user->last_name }}</td>
          <td>{{ $user->role->role_name }}</td>
          <td class="d-inline">
            <a href="/manage/delete/{{ $user->id }}" class="btn btn-danger">Delete</a>
            <a href="/manage/role/{{ $user->id }}" class="btn btn-warning">Update</a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
