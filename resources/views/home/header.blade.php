<!-- header section likan f userpage
<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.html"><img width="250" src="images/logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="about.html">About</a></li>
                              <li><a href="testimonial.html">Testimonial</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="product.html">Products</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="blog_list.html">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        </li>
                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>
                     @if (Route::has('login'))

                           @auth
                              <li class="nav-item">
                              <x-app-layout></x-app-layout>
                              </li>

                              <li class="nav-item">
                              <a class="btn btn-primary" id="logincss" href="{{ route('logout') }}">Logout</a>
                              </li>

                     @else
                              <li class="nav-item">
                              <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
                              </li>
                           @endauth
                     @endif

                     
                     </ul>
                  </div>
               </nav>
            </div>
         </header> -->
         <!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
         <!-- <header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html"><img width="250" src="images/logo.png" alt="Logo" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <!-- Menu items existants -->
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="true">
                            <span class="nav-label">Pages <span class="caret"></span></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="about.html">About</a></li>
                            <li><a href="testimonial.html">Testimonial</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.html">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog_list.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto align-items-center"> -->
                    <!-- Barre de recherche -->
                    <!-- <li class="nav-item">
                        <form class="form-inline">
                            <button class="btn nav_search-btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </li> -->

                    <!-- Section authentification -->
                    <!-- @if(Auth::check())
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-primary">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="btn btn-primary mr-2" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</header> ----> 
<!-- <header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{ url('/') }}"><img width="250" src="images/logo.png" alt="Logo" /></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto"> -->
                    <!-- Menu items -->
                    <!-- <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item {{ request()->is('products*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('products') }}">Products</a>
                    </li> -->
                    <!-- Autres éléments du menu -->
                <!-- </ul>

                <ul class="navbar-nav ml-auto align-items-center"> -->
                    <!-- @auth -->
                        <!-- Bouton Logout avec formulaire POST -->
                        <!-- <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-primary">Logout</button>
                            </form>
                        </li> -->
                    <!-- @else -->
                        <!-- Boutons Login/Register -->
                        <!-- <li class="nav-item">
                            <a class="btn btn-primary mr-2" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </div>
</header> -->

<!-- <header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{ url('/') }}"><img width="250" src="images/logo.png" alt="Logo" /></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto"> -->
                    <!-- Menu items -->
                    <!-- <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/') }}">HOME</a>
                    </li>
                    <li class="nav-item {{ request()->is('userpage*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('userpage') }}">PAGES</a>
                    </li>
                    <li class="nav-item {{ request()->is('products*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('products') }}">PRODUCTS</a>
                    </li>
                    <li class="nav-item {{ request()->is('blog*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('blog') }}">BLOG</a>
                    </li>
                    <li class="nav-item {{ request()->is('contact*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto align-items-center"> -->
                    <!-- Search form -->
                    <!-- <li class="nav-item mr-3">
                        <form class="form-inline">
                            <input type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary ml-1" type="submit">Q</button>
                        </form>
                    </li> -->
                    
                    <!-- @auth -->
                        <!-- Logout button -->
                        <!-- <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-link nav-link">Logout</button>
                            </form>
                        </li> -->
                    <!-- @else -->
                        <!-- Login/Register links -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item ml-2">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </div>
</header> -->
<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img width="250" src="images/logo.png" alt="Logo" />
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/') }}">HOME</a>
                    </li>
                    <li class="nav-item {{ request()->is('userpage*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('userpage') }}">PAGES</a>
                    </li>
                    <li class="nav-item {{ request()->is('products*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('products') }}">PRODUCTS</a>
                    </li>
                    <li class="nav-item {{ request()->is('blog*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('blog') }}">BLOG</a>
                    </li>
                    <li class="nav-item {{ request()->is('contact*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item mr-3">
                        <div class="search-container">
                            <i class="fas fa-search search-icon" onclick="toggleSearch()"></i>
                            <div class="search-bar" id="searchBar">
                                <form class="form-inline">
                                    <input type="search" placeholder="Search" aria-label="Search">
                                </form>
                            </div>
                        </div>
                    </li>
                    
                    @auth
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-outline-primary">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="btn btn-outline-primary mr-2" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </div>
</header>