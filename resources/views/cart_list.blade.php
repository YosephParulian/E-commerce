@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result for Product</h4>
            @foreach ($products as $product)
            <div class="row searched-item cart-list-divider">
                <div class="col-sm-3">
                    <a href="detail/{{ $product->id }}">
                        <img src="{{ $product->gallery }}" class="trending-img" alt="{{ $product->name }}">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="detail/{{ $product->id }}">
                        
                            <h2>{{ $product->name }}</h2>
                            <h5>{{ $product->description }}</h5>
                      
                        </a>
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-warning">Remove to Cart</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection