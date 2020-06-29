
@extends('layouts.master')

@section('content')
    <div class="row" id="wrapper5">

        <div class="col-md-8 col-md-offset-2">

            <h1>User Board</h1>
            <hr>
            <h2>Your Orders</h2>
            @foreach($orders as $order)
            <div class="panel panel-default">
                    <div class="panel-body">
                            <ul class="list-group">
                                @foreach($order->cart->items as $item)
                                    <li class="list-group-item">
                                    <span class="badge">{{ $item['price']}} $</span>
                                    {{ $item['item']['title']}} |  {{ $item['qty']}} Units
                                    </li>
                                @endforeach
                                  </ul>
                    </div>
                    <div class="panel-footer">
                    <strong>Total Price: {{ $order->cart->totalPrice}} $</strong>
                    </div>
                  </div>
            @endforeach
            
        </div>
        
    </div>
    <div class="push5"></div>
@endsection