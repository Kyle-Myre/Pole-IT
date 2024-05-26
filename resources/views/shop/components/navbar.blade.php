<head>
    <title>Pole-IT</title>
</head>
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow  border-5 border-primary-perso sticky-top p-0">
    <a href="index.html" class="navbar-brand navbar-logo-background d-flex align-items-center px-4 px-lg-5">
        <img src="{{url('/images/icon.png')}}" alt="Logo" style="height: 90px;"> <!-- Logo image -->
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0 align-items-center">
            <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
            <a href="{{route('products')}}" class="nav-item nav-link active">Products</a>
            @if(Auth::check())
            <a href="{{route('logout')}}" class="nav-item nav-link text-danger">Log out</a>
            @else
            <a href="{{route('login')}}" class="nav-item nav-link">Sign up</a>
            <a href="{{route('register')}}" class="nav-item nav-link">Sign in</a>
            @endif
            <a href="{{route('cart-list')}}" class="nav-item nav-link">
                <span><i class="bi bi-basket2 h2"></i></span>&nbsp;<span>@if (session('cart'))
                    {{count(session()->get('cart'))}}
                @else 0 @endif</span>
            </a>
        </div>
    </div>
</nav>