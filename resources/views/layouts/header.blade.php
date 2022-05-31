
<header class="header" id="primary-header">
    <div class="overlay has-fade"></div>
    <div class="container-fluid">
        <nav class="header-nav flex flex-jc-sb flex-ai-c">
            <a href="#" class="logo p-l-1">
                <div class="logo-container flex flex-ai-c gap-2">
                    <img src="/images/logo_smaller.png" alt="">
                    <h1 class="logo-text tt-c ta-c">
                        Cornish Holiday Cottages </h1>
                        @auth
                        <div class="flex gap-1 p-1 flex-fd-c">
                            <h4>Change Logo</h4>
                            <input type="file">
                             </div>
                             @endauth
                </div>
        
                
            
            </a>

            <ul class="nav-items flex hide-for-mobile">
                <li class=""><a href="/" class="{{ (request()->is('/')) ? 'nav-item-active' : ''  }}">Home</a></li>
                <li><a href="/properties" class="{{ (request()->is('properties')) ? 'nav-item-active' : ''  }}">Properties</a></li>

                <li><a href="/contact" class="{{ (request()->is('contact')) ? 'nav-item-active' : ''  }}">Contact</a></li>
            </ul>
            @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-logout m-l-1 hide-for-mobile">Logout</button>


            </form>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a href="/websiteSettings" class="btn m-l-1 hide-for-mobile">Settings</a>


            </form>
           

            @endauth



            <a href="#" class="burger-menu hide-for-desktop p-r-1">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </nav>
        <div class="header-menu-dropdown has-fade">
            <a href="{{ route('landing-page') }}">Home</a>
            <a href="{{ route('properties') }}">Properties</a>
            <a href="#">Details</a>
            <a href="#">Bookings</a>
            <a href="#">Contact</a>
            @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-logout invert m-l-1">Logout</button>


            </form>
           

            @endauth
        </div>

    </div>
</header>