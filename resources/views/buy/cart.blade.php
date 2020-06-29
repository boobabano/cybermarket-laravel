@extends('layouts.master')

@section('title')
     Cart
@endsection

@section('content')
<div id="wrapper6">
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($items as $item)
                        <li class="list-group-item">
                            <span class="badge">{{ $item['qty']}}</span>
                            <span><img src="{{ $item['item']['imagePath'] }}" width="140px" height="200px"></span>
                            &emsp;&emsp;&emsp;
                            <strong >{{ $item['item']['title']}}</strong>
                            <span class="label label-success">{{ $item['price']}}</span> 
                            <div class="btn-group">
                                <button type ="button"  class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Edit <span class="caret"></span></button>    
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('item.reduceByOne', ['id'=> $item['item']['id']]) }}">Remove 1</a></li>
                                    <li><a href="{{ route('item.addByOne', ['id' => $item['item']['id']]) }}">add 1</a></li>
                                    <li><a href="{{ route('item.removeItem', ['id'=> $item['item']['id']]) }}">Remove Items</a></li>
                                </ul>
                            </div>                           
                        </li>
                    @endforeach
                </ul>

            </div>


        </div>
        <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total Price : {{ $totalPrice }}</strong>
                </div>
        </div>
        <hr>
        <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href= "{{ route('checkout') }}" type="button" class="btn btn-primary">Checkout</a>
                </div>
        </div>    
    @else
    <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h2>The Cart is empty !</h2>
            </div>
    </div>
    
    @endif
</div>
    <div class="push6"></div>
@endsection