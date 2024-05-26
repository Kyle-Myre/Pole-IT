<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="{{url('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('css/bootstrap.home.min.css')}}" rel="stylesheet">
    <title>Pole IT</title>
</head>
<nav
    class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary-perso sticky-top p-0">
    <a href="index.html" class="navbar-brand navbar-logo-background d-flex align-items-center px-4 px-lg-5">
        <img src="{{url('images/new_pole_it_logo-removebg-preview.png')}}" alt="Logo" style="height: 90px;">
        <!-- Logo image -->
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
            <a href="{{route('about')}}" class="nav-item nav-link">About</a>
            <a href="{{route('blog')}}" class="nav-item nav-link">Blogger</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{route('blog')}}" class="dropdown-item">Day/night Activities</a>
                    <a href="{{route('blog')}}" class="dropdown-item">different activities</a>
                    <a href="{{route('e-commerce')}}" class="dropdown-item">Merch</a>
                    <a href="{{route('team')}}" class="dropdown-item">Our Team</a>
                </div>
            </div>
            <a href="" class="nav-item nav-link">Contact</a>
        </div>
    </div>
</nav>