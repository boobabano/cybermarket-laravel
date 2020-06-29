@extends('layouts.master')


    @section('head')

        <div class = "jumbotron text-center">
            <h1>Welcome To Cyber Market </h1>
            <p>The Best Shopping Experience  </p>
            @if(Auth::check())
                <p><a class="btn btn-warning btn-lg" href= "{{ route('pages.userBoard')}}" role="button">User Profile</a> <a class="btn btn-warning btn-lg" href="{{ route('pages.logout') }}" role="button">Logout</a></p>
            @else
                <p><a class="btn btn-warning btn-lg" href= "{{ route('pages.login')}}" role="button">Login</a> <a class="btn btn-warning btn-lg" href="{{ route('pages.register') }}" role="button">Register</a></p>
            @endif
        </div>    
    @endsection

    @section('content')

    <style type="text/css">
        .carousel{
            background: #2f4357;
            margin-top: 20px;
        }
        .carousel .item{
            min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
        }
        .carousel .item img{
            margin: 0 auto; /* Align slide image horizontally center */
        }
        .bs-example{
            margin: 20px;
        }
        </style>
        
    
    <div id = "wrapper3">
                <u><h3 class="text-center"></h3></u>
                
                <div class="bs-example">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                            <li data-target="#myCarousel" data-slide-to="5"></li>
                            <li data-target="#myCarousel" data-slide-to="6"></li>
                            <li data-target="#myCarousel" data-slide-to="7"></li>
                            <li data-target="#myCarousel" data-slide-to="8"></li>
                            <li data-target="#myCarousel" data-slide-to="9"></li>
                            <li data-target="#myCarousel" data-slide-to="10"></li>
                            <li data-target="#myCarousel" data-slide-to="11"></li>
                            <li data-target="#myCarousel" data-slide-to="12"></li>
                            <li data-target="#myCarousel" data-slide-to="13"></li>
                            <li data-target="#myCarousel" data-slide-to="14"></li>
                            <li data-target="#myCarousel" data-slide-to="15"></li>
                        </ol>   
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/black-panther-full-cover.jpg" alt="First Slide">
                            </div>
                            <div class="item">
                                <img src="images/top_2017.jpg" alt="Second Slide">
                            </div>
                            <div class="item">
                                <img src="images/jumanji.jpg" alt="Third Slide">
                            </div>
                            <div class="item">
                                <img src="images/top_2016.jpg" alt="Fourth Slide">
                            </div>
                            <div class="item">
                                <img src="images/furious-7-poster.jpg" alt="Fifth Slide">
                            </div>
                            <div class="item">
                                <img src="images/justice-league.jpg" alt="Sixth Slide">
                            </div>
                            <div class="item">
                                <img src="images/avengers-age-of-ultron-uk-poster.jpg" alt="Seventh Slide">
                            </div>
                            <div class="item">
                                <img src="images/ghost-in-the-shell.jpg" alt="Eighth Slide">
                            </div>
                            <div class="item">
                                <img src="images/clash-of-the-titans-movie-poster-3d-3.jpg" alt="Nineth Slide">
                            </div>
                            <div class="item">
                                <img src="images/immortals1.jpeg" alt="Tenth Slide">
                            </div>
                            <div class="item">
                                <img src="images/gods-of-egypt.jpg" alt="Eleventh Slide">
                            </div>
                            <div class="item">
                                <img src="images/Gods-of-Egypt_poster_goldposter_com_52.jpg" alt="Twelveth Slide">
                            </div>
                            <div class="item">
                                <img src="images/thor-ragnarok-posters-thumb.jpg" alt="Thirteenth Slide">
                            </div>
                            <div class="item">
                                <img src="images/thor_ragnarok_key_art_5k-5120x2880.jpg" alt="Fourteenth Slide">
                            </div>
                            <div class="item">
                                <img src="images/prince0fPersia.jpg" alt="Fifteenth Slide">
                            </div>
                            <div class="item">
                                <img src="images/2015_terminator_genisys-2560x1600.jpg" alt="Sixteenth Slide">
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
                    
            </div>
                
        </div> 
    <div class="push3"></div>
    @endsection