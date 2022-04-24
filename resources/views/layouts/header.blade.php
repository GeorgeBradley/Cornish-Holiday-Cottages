
<header class="header">
    <div class="overlay has-fade"></div>
    <div class="container-fluid">
        <nav class="header-nav flex flex-jc-sb flex-ai-c">
            <a href="#" class="logo p-l-1">
                <div class="logo-container flex flex-ai-c gap-2">
                    <img src="/images/logo_smaller.png" alt="">
                    <h1 class="logo-text tt-c ta-c">
                        Cornish Holiday Cottages </h1>

                </div>

            </a>

            <ul class="nav-items flex hide-for-mobile">
                <li class=""><a href="/" class="{{ (request()->is('/')) ? 'nav-item-active' : ''  }}">Home</a></li>
                <li><a href="/properties" class="{{ (request()->is('properties')) ? 'nav-item-active' : ''  }}">Properties</a></li>

                <li><a href="bookings.html">Bookings</a></li>
                <li><a href="">Contact</a></li>
            </ul>
            @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-logout m-l-1">Logout</button>


            </form>
           

            @endauth



            <a href="#" class="burger-menu hide-for-desktop p-r-1">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </nav>
        <div class="header-menu-dropdown has-fade">
            <a href="#">Home</a>
            <a href="properties.html">Properties</a>
            <a href="">Details</a>
            <a href="bookings.html">Bookings</a>
            <a href="">Contact</a>

        </div>

    </div>
</header>