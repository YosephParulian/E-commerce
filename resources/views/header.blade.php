<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user'))
{
  $total = ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Orders</a>
          </li>
          <form action="/search" class="d-flex">
            <input class="form-control search-box me-2" type="text" name="query" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="cart_list">Cart({{ $total }})</a>
            </li>
            <li class="nav-item dropdown">
              @if(Session::has('user'))
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Session::get('user')['name'] }}
              </a>
              <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
              </ul>
              @else
              <a class="nav-link" href="/login">Login</a>
              @endif
            </li>
        </ul>
      </div>
    </div>
  </nav>