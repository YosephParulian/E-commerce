@extends('master')
@section('content')
<div class="custom-product">

      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          @foreach ($products as $product)
          <li data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $product['id']-1 }}"{{ $product['id']==1 ? ' class="active"' : '' }}></li>
          @endforeach
        </ol>
        <div class="carousel-inner">
          @foreach ($products as $product)
          <div class="carousel-item{{ $product['id']==1 ? ' active' : '' }}" data-bs-interval="10000">
            <a href="detail/{{ $product['id'] }}">
            <img src="{{ $product['gallery'] }}" class="slider-img d-block" alt="{{ $product['name'] }}">
            <div class="carousel-caption slider-text">
              <h5>{{ $product['name'] }}"</h5>
              <p>{{ $product['description'] }}"</p>
            </div>
            </a>
          </div>
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
      <div class="trending-wrapper">
        <h3>Trending Product</h3>
        @foreach ($products as $product)
        <div class="trending-item">
          <a href="detail/{{ $product['id'] }}">
          <img src="{{ $product['gallery'] }}" class="trending-img" alt="{{ $product['name'] }}">
            <div>
              <h5>{{ $product['name'] }}"</h5>
            </div>
          </a>
        </div>
        @endforeach
      </div>
      </div>
</div>
@endsection