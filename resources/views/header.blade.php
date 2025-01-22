<!-- header-area -->
<header class="header-style-five">
    <div id="sticky-header" class="menu-area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <div class="logo">
                                <a href="{{ route('welcome') }}"><img src="\Images\logo imani web.png" width="113"
                                        alt="Logo"></a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="menu {{ request()->routeIs('welcome') ? 'active' : '' }}">
                                        <a href="{{ route('welcome') }}">Home</a>
                                    </li>

                                    <li class="menu {{ request()->routeIs('about-us') ? 'active' : '' }}">
                                        <a href="{{ route('about-us') }}">About</a>
                                    </li>

                                    <li class="menu {{ request()->routeIs('propertie') ? 'active' : '' }}">
                                        <a href="{{ route('propertie') }}">Properties</a>
                                    </li>

                                    <li class="menu {{ request()->routeIs('our-services') ? 'active' : '' }}">
                                        <a href="{{ route('our-services') }}">Services</a>
                                    </li>

                                    <li class="menu {{ request()->routeIs('contact-us') ? 'active' : '' }}">
                                        <a href="{{ route('contact-us') }}">Contact</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="header-action">
                                <ul class="list-wrap">
                                    <li class="header-social">
                                        <ul class="list-wrap">
                                            <li><a href="https://www.facebook.com/share/1AyWdFmbZt/"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://www.instagram.com/imani_elite_realty/"><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a href="https://x.com/Imani_Elite?t=tDGor13BVsDvqiuLbs7FbQ&s=09"><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a
                                                    href="https://www.tiktok.com/@imani_elite_realty?_t=ZM-8tGoftH7BJ7&_r=1"><i
                                                        class="fab fa-tiktok"></i></a></li>

                                        </ul>
                                    </li>
                                    <li class="header-contact">
                                        <a href="tel:254 717 646244">+254 717 646244</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="fas fa-times"></i></div>
                            <div class="nav-logo">
                                <a href="{{ route('welcome') }}"><img src="\Images\logo imani web.png" width="113"
                                        alt="Logo"></a>
                            </div>
                            <div class="menu-outer">

                            </div>
                            <div class="social-links">
                                <ul class="clearfix list-wrap">
                                    <li><a href="https://www.facebook.com/share/1AyWdFmbZt/"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/imani_elite_realty/"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://x.com/Imani_Elite?t=tDGor13BVsDvqiuLbs7FbQ&s=09"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.tiktok.com/@imani_elite_realty?_t=ZM-8tGoftH7BJ7&_r=1"><i
                                                class="fab fa-tiktok"></i></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>

                </div>
            </div>
        </div>
    </div>
</header>
