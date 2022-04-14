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
              @if(session()->has('cart'))
                @foreach(session()->get('cart') as $cartData)

                <tr>
                    <td data-th="Product">
                        <div class="row">
                           <div class="col-sm-12 hidden-xs">
                              <img src="http://placehold.it/100x100" alt="..." class="img-responsive" /></div>
                            <div class="col-sm-10">
                                <h4 class="nomargin">{{$cartData['name']}}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{$cartData['price']}}</td>
                    <td data-th="Quantity">
                        <input type="number" class="form-control text-center" value="{{$cartData['quantity']}}">
                    </td>
                    <td data-th="Subtotal" class="text-center">{{$cartData['subtotal']}}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                    </td>
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
                <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                
                    <td colspan="2" class="hidden-lg"></td>
                    <td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
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