

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Cyber Market
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ route('pages.index') }}">Home</a></li>
                    <li><a href="{{ route('pages.items') }}">Items</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
                <!-- Right Side Of Navbar -->

        <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ route('item.cart')}}"><i class="fas fa-cart-arrow-down" aria-hidden="true"></i> Cart <div class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</div></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="far fa-user-circle" aria-hidden="true"></i> User <span class="caret"></span></a>
             <ul class="dropdown-menu">
                 @if(Auth::check())
                    <li><a href="{{ route('pages.userBoard') }}">User Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ route('pages.logout') }}">Logout</a></li>
                @else
                    <li><a href="{{ route('pages.register') }}">Register</a></li>
                    <li><a href="{{ route('pages.login') }}">Login</a></li>
                @endif
                    
            </ul>
                </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</div>
</nav>