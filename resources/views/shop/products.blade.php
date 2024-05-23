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
    <main class="container">
        <section class="row row-cols-6 mt-5 gap-2 ml-6">
            @foreach ($products as $product)

            <a class="card d-flex flex-column text-decoration-none text-black" 
                href="{{route('product-show' , ['id' => $product->id] )}}"  style="width: 18rem;"
            >

                <img src="{{Storage::url($product->attachment)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">
                        <i>{{substr($product->description , 0 , 36)}}</i>...
                        <br>
                        @if($product->discount)
                    <p>
                        <span class="h4">
                            {{$product->price - ($product->price * ($product->discount / 100))}}$
                        </span>
                        <span>
                            Typically  : <s>{{$product->price}} $</s>
                        </span>
                    </p>
                    @else
                    <p> {{$product->price}} $ </p>
                    @endif
                    </p>
                </div>
            </a>


            @endforeach
        </section>
    </main>
</body>

</html>