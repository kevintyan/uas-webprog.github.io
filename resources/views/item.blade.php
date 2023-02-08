@extends('template.main')

@section('main')

<div class="justify-content-center d-flex py-5">
    <div class="card" style="width: 75%;">
        <div class="custom-image">
            <img src="{{ asset('/storage/' . $item->image_item) }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $item->item_name }}</h5>
          <p class="card-text">Detail: {{ $item->item_desc }}</p>
          <p class="card-text">Price: IDR {{ $item->price }}</p>
          @auth
            <form action="/carts/add" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 col-lg-4">
                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
                    <input type="hidden" class="form-control" id="product_id" name="item_id" value="{{ $item->id }}">
                    <label for="qty" class="form-label">Quantity</label>
                    <input type="number" class="form-control  @error('qty') is-invalid @enderror" id="qty" value="1" name="qty">
                    @error('qty')
                    <div class="invalid-feedback text-start mb-3">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                <button class="btn btn-warning" type="submit">Add to Cart</button>
            </form>
            @else
            <p class="text-danger">Please login to purchase this product</p>
            @endauth
        </div>
      </div>
</div>


@endsection


<style>
    .custom-image {
        width: 18rem;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>
