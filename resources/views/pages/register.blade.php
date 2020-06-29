
@extends('layouts.master')

@section('content')
    <div class="row" id="wrapper2">

        <div class="col-md-4 col-md-offset-4">

            <h1>Register</h1>
            @if(count($errors)> 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('pages.register')}}" method="post">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <button  class="btn btn-primary" type="submit">Register</button>
                {{ csrf_field()}}

            </form>
            <div class="push2"></div>
        </div>

    </div>
@endsection