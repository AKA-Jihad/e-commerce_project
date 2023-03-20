
<?php
use App\Http\Controllers\productController;
$total = 0;
if (Session::has('user')) {
  $total = productController::cartItem();
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">E-Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/myorders">Orders</a>
        </li>
      </ul>
      <ul class="navbar-nav navbar-right">
        @if (Session::has('user'))
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Session::get('user')['name']}}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/logout">Logout</a>
          </div>
        </li>
        @else
        <a class="nav-link btn btn-info text-light px-3 mr-2" href="/login">Login</a>
        <a class="nav-link btn btn-success text-light px-3" href="/register">Register</a>
        @endif
        <li class="nav-item">
            <a style="font-size: 18px;" class="nav-link" href="/cartlist"> <i class="fa-solid fa-cart-shopping"></i> ({{$total}})</a>
          </li>
      </ul>
    </div>
  </nav>