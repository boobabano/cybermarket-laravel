
@extends('layouts.master')

@section('content')
    <div class="row" id="wrapper" >

        <div class="col-md-4 col-md-offset-4">

            <h1>Login</h1>
            @if(count($errors)> 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('pages.login')}}" method="post">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <button class="btn btn-primary" type="submit">Login</button>
                {{ csrf_field()}}

            </form>
            <div class="push"></div>
            <br>
        <p>Not Already registered ?</p><u><a href="{{ route('pages.register') }}">Register</a></u>
        </div>

    </div>
@endsection