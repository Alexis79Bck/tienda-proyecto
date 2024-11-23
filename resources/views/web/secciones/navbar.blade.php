<!-- Header: Barra de Navegacion (NavBar) -->
<header class="header">
    <div class="header_overlay"></div>
    <div class="header_content d-flex flex-row align-items-center justify-content-start">
        <div class="logo">
            <a href="#">
                <div class="d-flex flex-row align-items-center justify-content-start">
                    <div><img src="images/logo_1.png" alt=""></div>
                    <div>Shop</div>
                </div>
            </a>
        </div>
        <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
        <nav class="main_nav">
            <ul class="d-flex flex-row align-items-start justify-content-start">
                <li class="active"><a href="#">Women</a></li>
                <li><a href="#">Men</a></li>
                <li><a href="#">Kids</a></li>
            </ul>
        </nav>
        <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
            <!-- Search -->
            @include('web.componentes.navbar_search')
            
            <!-- User -->
            @if (Route::has('login'))
                @auth
                    <div class="user">
                        <a  href="{{ route('dashboard') }}">
                            
                            
                        </a>
                    </div>
                @else
                    <div class="user">
                        <a  href="{{ route('login') }}">
                            <div>
                                <img src="images/user.svg" alt="https://www.flaticon.com/authors/freepik">                            
                            </div>
                        </a>
                    </div>
                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            @endif
            
            {{-- <!-- Cart -->
            <div class="cart"><a href="cart.html">
                    <div><img class="svg" src="images/cart.svg" alt="https://www.flaticon.com/authors/freepik">
                        <div>1</div>
                    </div>
                </a></div>
            <!-- Phone -->
            <div class="header_phone d-flex flex-row align-items-center justify-content-start">
                <div>
                    <div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                </div>
                <div>+1 912-252-7350</div>
            </div> --}}
        </div>
    </div>
</header>

