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
    <section class="row row-cols-1 mt-5 gap-2 ml-6">
      <div class="card mb-3" style="max-width: 1140px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{Storage::url($product->attachment)}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title h1">
                {{$product->name}}</h5>
              <p class="card-text h4">
                <i>{{$product->description}}</i>

                <br>
                <br>

                @if($product->discount)
                <span class="h4 text-primary">
                  {{$product->price - ($product->price * ($product->discount / 100))}}$
                </span>

                <span>
                  Typically : <s>{{$product->price}} $</s>
                </span>

              </p>
              @else
              <p> {{$product->price}} $ </p>
              @endif
              </p>
              <p class="card-text">

              <form method="POST" action="{{route('add-to-cart' , ['id' => $product->id])}}" class="d-flex gap-2">
                @csrf
                @method('POST')
                <button type="submit" class="btn btn-primary"><span><i class="bi bi-cart-check"></i></span>Add To
                  Cart</button>
              </form>

              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>

</html>