<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @extends('templates.layout')
    @include('shop.components.navbar')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <main class="container">
        <section class="row  mt-5 gap-2 ml-6">
            <table class="table table-striped table-bordered">
              <tr>
                <th>Picture</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Dimensions</th>
                <th>Actions</th>
              </tr>
               @foreach (session('cart') as $id => $details)
                 <tr rowId="{{$id}}">
                    <td><img src="{{Storage::url($details['attachment'])}}" style="width:55px" alt=""></td>
                    <td>{{$details['name']}}</td>
                    <td>{{$details['price']}} $</td>
                    <td>{{$details['quantity']}}</td>
                    <td>{{$details['dimensions']}}</td>
                    <td>
                        <button class="btn btn-danger delete-product">
                            Remove
                        </button>
                    </td>
                 </tr>
               @endforeach
               
               <tr>
                    <td class="gap-1">
                        <a href="{{route('products')}}" class="btn btn-outline-info">Return</a>
                        <a href="{{route('checkout')}}" class="btn btn-outline-primary">Check out</a>
                    </td>
                    <td colspan="5">
                        Total : {{session('total') }} $
                    </td>
               </tr>

            </table>
            <script>
                $(document).ready(() => {
                    $('.delete-product').click(function (e) {
                    e.preventDefault();
                    var element = $(this);

                    if (confirm("Do want to delete this ?")) {

                        $.ajax({
                            url : '{{route('delete.cart.product')}}',
                            method : "DELETE",
                            data : {
                                _token : "{{csrf_token()}}",
                                id : element.parents("tr").attr("rowId")
                            },
                            success : function (response) {
                                window.location.reload();
                            }
                        })}
                    });
                });
            </script>
        </section>
    </main>
   
</body>
</html>