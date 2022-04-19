@extends('Frontend.master')

@section('content')

    <style type="text/css">
        .table>tbody>tr>td,
        .table>tfoot>tr>td {
            vertical-align: middle;
        }
        @media screen and (max-width: 600px) {
            table#cart tbody td .form-control {
                width: 20%;
                display: inline !important;
            }
            .actions .btn {
                width: 36%;
                margin: 1.5em 0;
            }
            .actions .btn-info {
                float: left;
            }
            .actions .btn-danger {
                float: right;
            }
            table#cart thead {
                display: none;
            }
            table#cart tbody td {
                display: block;
                padding: .6rem;
                min-width: 320px;
            }
            table#cart tbody tr td:first-child {
                background: #333;
                color: #fff;
            }
            table#cart tbody td:before {
                content: attr(data-th);
                font-weight: bold;
                display: inline-block;
                width: 8rem;
            }
            table#cart tfoot td {
                display: block;
            }
            table#cart tfoot td .btn {
                display: block;
            }
        }
    </style>

    <div class="row">

        <div class="col-md-2"></div>
        <div class="col-md-10" style="margin-top: 100px;">
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
                </thead>
                <tbody>
                    @php $total=0; @endphp
              @if(session()->has('cart'))
               
                @foreach(session()->get('cart') as $cart_id=>$cartData)
                    @php 
                        $total=$total+$cartData['price']*$cartData['quantity'];
                    @endphp
                <tr>
                    <form action="{{route('cart.update')}}" method="post">
                        @csrf 
                        <input type="hidden" name="id" value="{{$cart_id}}">
                    <td data-th="Product">
                        <div class="row">
                           <div class="col-sm-12 hidden-xs">
                              <img src="{{asset($cartData['image'])}}" alt="product-image" class="img-responsive" style="height:50px;"/></div>
                            <div class="col-sm-10">
                                <h4 class="nomargin">{{$cartData['name']}}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{$cartData['price']}}</td>
                    <td data-th="Quantity">
                        <input type="number" id="cart-quantity" class="form-control text-center" value="{{$cartData['quantity']}}" name="quantity" min="1" max="{{$cartData["max_quantity"]}}">
                    </td>
                    <td data-th="Subtotal" class="text-center">{{$cartData['subtotal']}}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                        <a class="btn btn-danger btn-sm" href="{{route('cart.delete',$cart_id)}}"><i class="fa fa-trash-o"></i></a>
                    </td>
                    </form>
                </tr>

                @endforeach
                 @else
                 <tr>
                     <td>
                         <h1>Your Cart is Empty</h1>
                     </td>
                 </tr>
                 
                 @endif

                </tbody>
                <tfoot>
                <tr>
                <td><a href="{{route('home')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                
                    <td colspan="2" class="hidden-lg"></td>
                    <td class="hidden-xs text-center"><strong>Total {{$total}} TK.</strong></td>
                    <td><a href="{{route('cart.clear')}}" class="btn btn-danger"> Clear Cart</a></td>
                    <!-- <td colspan="" class="hidden-lg"></td> -->
                    <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>

                </tr>
                </tfoot>
            </table>
        </div>
        <!-- <div class="col-md-2"></div> -->
    </div>

@endsection

@section("scripts")
<script>


</script>
@endsection