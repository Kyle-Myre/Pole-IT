<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @extends('templates.layout')
    @include('shop.components.navbar')
</head>

<body>
    {{-- <main class="container">
        <section class="row  mt-5 gap-2 ml-6">
            <div class="card">
                @foreach ($cart as $item)
                    @foreach ($item as $sub)
                        <div class="mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                <h5 class="card-title">{{ $sub->name }}</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </section>
    </main> --}}
</body>
</html>