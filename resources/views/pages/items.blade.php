@extends('layouts.master')

@section('content')

<div class="title-page">
        
    <h1 class="text-center">Items</h1>
</div>

<!-- images display with tables
<table class="item">
    <tr>
        <td>
            <img src="images/MV5BMjI3Nzg0MTM5NF5BMl5BanBnXkFtZTgwOTE2MTgwNTM@._V1_UX182_CR0,0,182,268_AL_.jpg"><p>Pacific Rim</p></img>
        </td>
        <td>
            <img src="images/MV5BMjI3Nzg0MTM5NF5BMl5BanBnXkFtZTgwOTE2MTgwNTM@._V1_UX182_CR0,0,182,268_AL_.jpg"><p>Pacific Rim</p></img>
        </td>
    </tr>
    <tr>
            <td>
                <img src="images/MV5BMjI3Nzg0MTM5NF5BMl5BanBnXkFtZTgwOTE2MTgwNTM@._V1_UX182_CR0,0,182,268_AL_.jpg"><p>Pacific Rim</p></img>
            </td>
            <td>
                <img src="images/MV5BMjI3Nzg0MTM5NF5BMl5BanBnXkFtZTgwOTE2MTgwNTM@._V1_UX182_CR0,0,182,268_AL_.jpg"><p>Pacific Rim</p></img>
            </td>
    </tr>

</table> -->

<div class="container">
    <div class="row">
        @foreach($items as  $item)
            <div class="col-sm-6  col-sm-3  ">
                <div class="thumbnail">
                    <a href="{{ route('pages.details',['id' => $item->id]) }}"><img   src="{{ $item->imagePath }}" alt="..."></a>
                    <h5 class="text-center">{{ $item->title }}</h5>
                    <p class="description text-center">{{ $item->description }}</p>
                    <div class="clearfix text-center">
                        <p>${{ $item->price }}</p>
                        <a href="{{ route('item.addToCart', ['id' => $item->id]) }}" class="btn btn-primary" role="button">Add Item</a>
                    </div>
                </div>
              </div>
        @endforeach
    </div>
</div>
    
    <div class="push4"></div>
@endsection