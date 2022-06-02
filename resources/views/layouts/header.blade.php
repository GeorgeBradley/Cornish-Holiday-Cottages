
<header class="header" id="primary-header">
    <div class="overlay has-fade"></div>
    <div class="container-fluid">
        <nav class="header-nav flex flex-jc-sb flex-ai-c">
            <a href="#" class="logo p-l-1">
                <div class="logo-container flex flex-ai-c gap-2 flex-fw-w">
                    <img src="{{ asset('/images/website_theme/' . $website_info->website_logo_path) }}" alt="">
                    <h1 class="logo-text tt-c ta-c">
                        {{ $website_info->website_name }}</h1>
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
               @auth 
                <li><a href="/websiteSettings" class="{{ (request()->is('websiteSettings')) ? 'nav-item-active' : ''  }}">Theme Settings</a></li>
                @endauth

                
            </ul>
            @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-logout m-l-1 hide-for-mobile">Logout</button>


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