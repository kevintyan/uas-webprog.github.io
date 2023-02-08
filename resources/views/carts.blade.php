@extends('template.main')

@section('main')

{{-- VALIDATION USER --}}


@if (session()->has('success'))
<div class="row mt-3">
    <div class="d-flex justify-content-center">
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    </div>
</div>
@endif

@auth

    @if ($validate_id !== auth()->user()->id)
    <div class="text-center text-danger mt-3">
        <h1>Access Denied</h1>
    </div>
    @else


        @if (!count($carts))
        <div class="text-center mt-3 text-danger">
            <h1>No Item has been added to cart</h1>
        </div>
        @else



        <input type="hidden" class="form-control" value="{{ $total = 0 }}">
        @foreach ($carts as $cart)
            <input type="hidden" class="form-control" value="{{ $total += $cart->item->price * $cart->qty  }}">
        @endforeach
        <div class="row mt-3">
            <div class="col-lg-12 d-flex justify-content-center">
                <h4 style="padding-right: 10px">Total Cart: IDR {{ $total }}</h4>
                <form action="/carts/purchase" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{ auth()->user()->id }}">
                    <button class="btn btn-primary" type="submit">Purchase</button>
                </form>
            </div>
        </div>

        @foreach ($carts as $cart)
            <div class="row mt-3 ">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="card w-75 h-100">
                        <div class="custom-image">
                            <img src="{{ asset('/storage/' . $cart->item->image_item)  }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{ $cart->item->name }}</h4>
                            <p class="card-text">Quantity: {{ $cart->qty }}</p>
                            <p class="card-text">Price: IDR {{ $cart->item->price }}</p>
                            <p class="card-text h5">Total Price: IDR {{ $cart->item->price * $cart->qty}}</p>
                            <div class="d-inline">
                                <a href="/carts/delete/{{ $cart->id }}" class="btn btn-danger"><i class="bi-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach



        @endif


    @endif
@endauth



@endsection

<style>
    .custom-image {
        width: 18rem;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>
