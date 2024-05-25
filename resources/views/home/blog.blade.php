<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @include('home.components.navbar')
    <div class="container-fluid p-0 pb-5">
        @foreach ($blogs as $blog)
            <div class="owl-carousel header-carousel position-relative mb-5">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{Storage::url($blog->attachment)}}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">
                                        <span class="text-glow">{{$blog->title}}</span>
                                    </h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">
                                        {!! $blog->descriptions !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/btstrap.bundle.min.js"></script>
        <script src="{{url('lib/wow/wow.min.js')}}"></script>
        <script src="{{url('lib/easing/easing.min.js')}}"></script>
        <script src="{{url('lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{url('lib/counterup/counterup.min.js')}}"></script>
        <script src="{{url('lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{url('js/main.js')}}"></script>
</body>

</html>