@extends('layouts.master')

@section('content')

    <h1 class="text-center">Details</h1>

    <div class="container-fluid">
        <div class="row"> 
            <div class="col-xs-10 col-sm-6 col-md-3 col-sm-offset-1 col-xs-offset-1 col-md-offset-1 " id="image">
            
                <img src="{{ asset($movie->imagePath) }}" with="423px" height="628px">
            
            </div> 
        
        
            
            
            <div class="col-sm-7 col-md-6 col-md-offset-2 col-xs-offset-1" id="paragraph">
                <p><u><b>Synopsis</b></u>
                <br><br> {{ $movie->synopsis }}
                <br><b>Director :</b> {{ $movie->director }}
                <br><b>Writers :</b> {{ $movie->writers }} 
                <br><b>Stars :</b> {{ $movie->stars }}
                <br><b>Year :</b> {{ $movie->year }}.
                <br><br><br>
                <u><b>Watch Trailer</b></u>
                <br><br><br><br><br>
                </p>
            </div> 
        
         
            <div class="embed-responsive embed-responsive-16by9  col-xs-10 col-sm-6 col-md-5 col-md-offset-6 col-xs-offset-1 " id="video">
                <iframe class="embed-responsive-item" width="560" height="315" src="{{ asset($movie->videoPath) }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
             
        </div>
    </div>
                 
    
@endsection