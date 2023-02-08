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
        <div class="alert alert-danger col-lg-8" role="alert">
            {{ session('delete') }}
        </div>
    </div>
</div>
@endif

@auth
<div class="row mt-3">
    @foreach ($items as $item)
    <div class="col-lg-3 mb-5 gap-2">
        <div class="card" style="width: 18rem; min-height: 55vh;">
            <img src="{{ asset('/storage/' . $item->image_item)  }}" class="card-img-top" alt="..." style="width: 285px; height: 200px;">
            <div class="card-body">
              <h4 class="card-title">{{ $item->item_name }}</h4>
              <p class="card-text h5">IDR {{ $item->price}}</p>
            </div>
            <a href="/item/detail/{{ $item->id }}" class="btn btn-warning">Detail</a>
        </div>
    </div>
    @endforeach
</div>
    @else
    <h1 class="text-center mt-5">Find and Buy Your Grocery Here!</h1>
@endauth

@auth
<div class="justify-content-center d-flex">
    {{ $items->links() }}
</div>
@endauth


@endsection
