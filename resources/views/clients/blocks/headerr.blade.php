    <!-- Start Header Area -->
    <header class="header-area header-wide">
        <!-- main header start -->
        <div class="main-header d-none d-lg-block">
            <!-- header middle area start -->
            <div class="header-main-area sticky">
                <div class="container">
                    <div class="row align-items-center position-relative">

                        <!-- start logo area -->
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="index.html">
                                    <img height="70px" src="{{asset('images/logo_nen_trang.png')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <!-- start logo area -->

                        <!-- main menu area start -->
                        <div class="col-lg-6 position-static">
                            <div class="main-menu-area">
                                <div class="main-menu">
                                    <!-- main menu navbar start -->
                                    <nav class="desktop-menu">
                                        <ul>
                                            <li class="active"><a href="{{ route('home.index') }}">Trang chủ </a>

                                            </li>
                                            <li class="position-static"><a href="{{ route('nam') }}">Sản phẩm nam </a>

                                            </li>
                                            <li><a href="{{ route('nu') }}">Sản phẩm nữ </a>

                                            </li>
                                            <li><a href="{{ route('tre_em') }}">Sản Phẩm Trẻ Em</a>

                                            </li>
                                            <li><a href="{{ route('giam_gia') }}">Giảm giá</a></li>
                                        </ul>
                                    </nav>
                                    <!-- main menu navbar end -->
                                </div>
                            </div>
                        </div>
                        <!-- main menu area end -->

                        <!-- mini cart area start -->
                        <div class="col-lg-4">
                            <div class="header-right d-flex align-items-center justify-content-xl-between justify-content-lg-end">
                                <div class="header-search-container">
                                    <button class="search-trigger d-xl-none d-lg-block"><i class="pe-7s-search"></i></button>
                                    <form class="header-search-box d-lg-none d-xl-block">
                                        <input type="text" placeholder="Tìm kiếm" class="header-search-field">
                                        <button class="header-search-btn"><i class="pe-7s-search"></i></button>
                                    </form>
                                </div>
                                <div class="header-configure-area">
                                    <ul class="nav justify-content-end">    
                                        <li class="user-hover">
                                            <a href="#">
                                                <i class="pe-7s-user"></i>
                                            </a>
                                            <ul class="dropdown-list">
                                                @if(auth()->check())
                                                    {{-- <li><a href="{{ route('tai_khoan') }}">Xin chào, {{ auth()->user()->name }}</a></li> --}}
                                                    {{-- <li><a href="{{ route('logout') }}">Đăng xuất</a></li> --}}
                                                    <li>
                                                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                                            @csrf
                                                            <button type="submit" style="background: none; border: none; cursor: pointer;">Đăng xuất</button>
                                                        </form>
                                                    </li><br><br>
                                                    <li>
                                                        <a href="{{route('san_pham.index')}}">Admin</a>
                                                    </li>
                                                @else
                                                    <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                                                    <li><a href="{{ route('register') }}">Đăng ký</a></li>
                                                @endif
                                            </ul>
                                            
                                        </li>

                                        <li>
                                            <a href="{{ route('gio_hang.index') }}" class="minicart-btn">
                                                <i class="pe-7s-shopbag"></i>
                                                <div class="notification"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- mini cart area end -->

                    </div>
                </div>
            </div>
            <!-- header middle area end -->
        </div>
        <!-- main header start -->

        <!-- mobile header start -->
        <!-- mobile header start -->
        <div class="mobile-header d-lg-none d-md-block sticky">
            <!--mobile header top start -->
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mobile-main-header">
                            <div class="mobile-logo">
                                <a href="index.html">
                                    <img src="{{asset('assets/client/img/logo/logo.png')}}" alt="Brand Logo">
                                </a>
                            </div>
                            <div class="mobile-menu-toggler">
                                <div class="mini-cart-wrap">
                                    <a href="cart.html">
                                        <i class="pe-7s-shopbag"></i>
                                        <div class="notification">0</div>
                                    </a>
                                </div>
                                <button class="mobile-menu-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile header top start -->
        </div>
        <!-- mobile header end -->
        <!-- mobile header end -->

        <!-- offcanvas mobile menu start -->
        <!-- off-canvas menu start -->
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="pe-7s-close"></i>
                </div>

                <div class="off-canvas-inner">
                    <!-- search box start -->
                    <div class="search-box-offcanvas">
                        <form>
                            <input type="text" placeholder="Search Here...">
                            <button class="search-btn"><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                    <!-- search box end -->

                    <!-- mobile menu start -->
                    <div class="mobile-navigation">

                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="index.html">Home</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home version 01</a></li>
                                        <li><a href="index-2.html">Home version 02</a></li>
                                        <li><a href="index-3.html">Home version 03</a></li>
                                        <li><a href="index-4.html">Home version 04</a></li>
                                        <li><a href="index-5.html">Home version 05</a></li>
                                        <li><a href="index-6.html">Home version 06</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">pages</a>
                                    <ul class="megamenu dropdown">
                                        <li class="mega-title menu-item-has-children"><a href="#">column 01</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">shop grid left sidebar</a></li>
                                                <li><a href="shop-grid-right-sidebar.html">shop grid right sidebar</a></li>
                                                <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title menu-item-has-children"><a href="#">column 02</a>
                                            <ul class="dropdown">
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="product-details-affiliate.html">product details affiliate</a></li>
                                                <li><a href="product-details-variable.html">product details variable</a></li>
                                                <li><a href="privacy-policy.html">privacy policy</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title menu-item-has-children"><a href="#">column 03</a>
                                            <ul class="dropdown">
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="compare.html">compare</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title menu-item-has-children"><a href="#">column 04</a>
                                            <ul class="dropdown">
                                                <li><a href="my-account.html">my-account</a></li>
                                                <li><a href="login-register.html">login-register</a></li>
                                                <li><a href="about-us.html">about us</a></li>
                                                <li><a href="contact-us.html">contact us</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children "><a href="#">shop</a>
                                    <ul class="dropdown">
                                        <li class="menu-item-has-children"><a href="#">shop grid layout</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">shop grid left sidebar</a></li>
                                                <li><a href="shop-grid-right-sidebar.html">shop grid right sidebar</a></li>
                                                <li><a href="shop-grid-full-3-col.html">shop grid full 3 col</a></li>
                                                <li><a href="shop-grid-full-4-col.html">shop grid full 4 col</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">shop list layout</a>
                                            <ul class="dropdown">
                                                <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                                <li><a href="shop-list-full-width.html">shop list full width</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">products details</a>
                                            <ul class="dropdown">
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="product-details-affiliate.html">product details affiliate</a></li>
                                                <li><a href="product-details-variable.html">product details variable</a></li>
                                                <li><a href="product-details-group.html">product details group</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children "><a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                        <li><a href="blog-list-left-sidebar.html">blog list left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                        <li><a href="blog-list-right-sidebar.html">blog list right sidebar</a></li>
                                        <li><a href="blog-grid-full-width.html">blog grid full width</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-details-left-sidebar.html">blog details left sidebar</a></li>
                                        <li><a href="blog-details-audio.html">blog details audio</a></li>
                                        <li><a href="blog-details-video.html">blog details video</a></li>
                                        <li><a href="blog-details-image.html">blog details image</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Contact us</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->

                    <div class="mobile-settings">
                        <ul class="nav">
                            <li>
                                <div class="dropdown mobile-top-dropdown">
                                    <a href="#" class="dropdown-toggle" id="currency" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Currency
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="currency">
                                        <a class="dropdown-item" href="#">$ USD</a>
                                        <a class="dropdown-item" href="#">$ EURO</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown mobile-top-dropdown">
                                    <a href="#" class="dropdown-toggle" id="myaccount" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        My Account
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="myaccount">
                                        <a class="dropdown-item" href="my-account.html">my account</a>
                                        <a class="dropdown-item" href="login-register.html"> login</a>
                                        <a class="dropdown-item" href="login-register.html">register</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- offcanvas widget area start -->
                    <div class="offcanvas-widget-area">
                        <div class="off-canvas-contact-widget">
                            <ul>
                                <li><i class="fa fa-mobile"></i>
                                    <a href="#">0123456789</a>
                                </li>
                                <li><i class="fa fa-envelope-o"></i>
                                    <a href="#">info@yourdomain.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="off-canvas-social-widget">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                    <!-- offcanvas widget area end -->
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
        <!-- offcanvas mobile menu end -->
    </header>
    <!-- end Header Area -->