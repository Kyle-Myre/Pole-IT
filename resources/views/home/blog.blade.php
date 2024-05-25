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
        <div class="owl-carousel header-carousel position-relative mb-5">
            @foreach ($blogs as $blog)
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
            @endforeach
        </div>
    </div>
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">Testimonial</h6>
                <h1 class="mb-0">Activities</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach ($activities as $activity)
                    <div class="testimonial-item p-4 my-5">
                        <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                        <div class="d-flex align-items-end mb-4">

                            <img class="img-fluid flex-shrink-0" src="{{Storage::url($activity->attachment)}}" 
                                style="width:12rem; height:8rem;"
                            />

                            <div class="ms-4">
                                <h5 class="mb-1">{{$activity->title}}</h5>
                                <p class="m-0">{{$activity->activity_type}}</p>
                            </div>
                        </div>
                        <p class="mb-0">
                            {!! $activity->description !!}
                        </p>
                        <p class="mb-0">
                            {{ $activity->activity_date }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
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