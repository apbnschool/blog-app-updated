
<div id="top-bar" class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">Lalbagh,Dhaka.</p>
                    </li>
                </ul>
            </div>
            <!--/ Top info end -->

            <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                        <a title="Facebook" href="">
                            <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                        </a>
                        <a title="Twitter" href="">
                            <span class="social-icon"><i class="fab fa-twitter"></i></span>
                        </a>
                        <a title="Instagram" href="">
                            <span class="social-icon"><i class="fab fa-instagram"></i></span>
                        </a>
                        <a title="Linkdin" href="">
                            <span class="social-icon"><i class="fab fa-github"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!--/ Top social end -->
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</div>
<!--/ Topbar end -->
<!-- Header start -->
<header id="header" class="header-one">
    <div class="bg-white">
        <div class="container">
            <div class="logo-area">
                <div class="row align-items-center">
                    <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                        <a class="d-block" href="{{route('home')}}">
                            <img loading="lazy"  src="{{ asset('/website-assets/images/logo.png') }}" alt="logo">
                        </a>
                    </div><!-- logo end -->

                    <div class="col-lg-9 header-right">
                        <ul class="top-info-box">
                            <li>
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Call Us</p>
                                        <p class="info-box-subtitle">(+9) 847-291-4353</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Email Us</p>
                                        <p class="info-box-subtitle">fahimmozumder458@gmail.com</p>
                                    </div>
                                </div>
                            </li>
                            <li class="last">
                                <div class="info-box last">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Global Certificate</p>
                                        <p class="info-box-subtitle">ISO 9001:2017</p>
                                    </div>
                                </div>
                            </li>
                            <li class="header-get-a-quote">
                                <a class="btn btn-primary" href="contact.html">Get A Quote</a>
                            </li>
                        </ul><!-- Ul end -->
                    </div><!-- header right end -->
                </div><!-- logo area end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </div>

    <div class="site-navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-dark p-0">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="navbar-collapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a href="{{route('home')}}" class="nav-link " data-toggle="">Home <i class=""></i></a>
                                </li>

{{--                                <li class="nav-item dropdown">--}}
{{--                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>--}}
{{--                                    <ul class="dropdown-menu" role="menu">--}}
{{--                                        <li><a href="about.html">About Us</a></li>--}}
{{--                                        <li><a href="team.html">Our People</a></li>--}}
{{--                                        <li><a href="testimonials.html">Testimonials</a></li>--}}
{{--                                        <li><a href="faq.html">Faq</a></li>--}}
{{--                                        <li><a href="pricing.html">Pricing</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}

{{--                                <li class="nav-item dropdown">--}}
{{--                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Projects <i class="fa fa-angle-down"></i></a>--}}
{{--                                    <ul class="dropdown-menu" role="menu">--}}
{{--                                        <li><a href="projects.html">Projects All</a></li>--}}
{{--                                        <li><a href="projects-single.html">Projects Single</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}

{{--                                <li class="nav-item dropdown">--}}
{{--                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>--}}
{{--                                    <ul class="dropdown-menu" role="menu">--}}
{{--                                        <li><a href="services.html">Services All</a></li>--}}
{{--                                        <li><a href="service-single.html">Services Single</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}

                                <li class="nav-item">
                                    <a href="{{route('features')}}" class="nav-link" data-toggle="">Features</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('news')}}" class="nav-link" data-toggle="">News</a>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>

                                <li class="log" style="margin-left: 550px">
                                @if(Session::get('visitorId'))
                                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">{{Session::get('visitorName')}}</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('sign.out') }}">Sign Out</a></li>
                                @else
                                    <li class="nav-item"><a class="nav-link" href="{{ route('sign.up') }}">Sign Up</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('sign.in') }}">Sign In</a></li>
                                    @endif
                                </li>


                            </ul>
                        </div>
                    </nav>
                </div>
                <!--/ Col end -->
            </div>
            <!--/ Row end -->

{{--            <div class="nav-search">--}}
{{--                <span id="search"><i class="fa fa-search"></i></span>--}}
{{--            </div><!-- Search end -->--}}

{{--            <div class="search-block" style="display: none;">--}}
{{--                <label for="search-field" class="w-100 mb-0">--}}
{{--                    <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">--}}
{{--                </label>--}}
{{--                <span class="search-close">&times;</span>--}}
{{--            </div><!-- Site search end -->--}}
{{--        </div>--}}
        <!--/ Container end -->

    </div>
    <!--/ Navigation end -->
</header>
<!--/ Header end -->
