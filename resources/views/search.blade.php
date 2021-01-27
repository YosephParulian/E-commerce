@extends('master')
@section('content')
<div class="row custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Result for Product</h4>
            @foreach ($products as $product)
            <div class="searched-item">
                <a href="detail/{{ $product['id'] }}">
                <img src="{{ $product['gallery'] }}" class="trending-img" alt="{{ $product['name'] }}">
                <div>
                    <h2>{{ $product['name'] }}</h2>
                    <h5>{{ $product['description'] }}</h5>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection