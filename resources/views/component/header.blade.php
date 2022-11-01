<header class="header-area sticky-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-5 col-lg-2 col-xl-1">
                <div class="header-logo">
                    <a href="/">
                        <img class="logo-main" src="{{env('APP_URL')}}/assets/images/logo.PNG" width="95" height="68" alt="Logo" />
                    </a>
                </div>
            </div>
            <div class="col-lg-7 col-xl-7 d-none d-lg-block">
                <div class="header-navigation ps-7">
                    <ul class="main-nav justify-content-start">
                        <li><a href="/">Home</a></li>
                        <li><a href="/catalog">Product</a></li>
                        <li><a href="/about">about</a></li>
                        <!-- <li class="has-submenu position-static"><a href="product.html">shop</a>
                            <ul class="submenu-nav-mega">
                                <li><a href="#/" class="mega-title">Shop Layout</a>
                                    <ul>
                                        <li><a href="product.html">Shop 3 Column</a></li>
                                        <li><a href="product-four-columns.html">Shop 4 Column</a></li>
                                        <li><a href="product-left-sidebar.html">Shop Left Sidebar</a></li>
                                        <li><a href="product-right-sidebar.html">Shop Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="#/" class="mega-title">Single Product</a>
                                    <ul>
                                        <li><a href="product-details-normal.html">Single Product Normal</a></li>
                                        <li><a href="product-details.html">Single Product Variable</a></li>
                                        <li><a href="product-details-group.html">Single Product Group</a></li>
                                        <li><a href="product-details-affiliate.html">Single Product
                                                Affiliate</a></li>
                                    </ul>
                                </li>
                                <li><a href="#/" class="mega-title">Others Pages</a>
                                    <ul>
                                        <li><a href="product-cart.html">Shopping Cart</a></li>
                                        <li><a href="product-checkout.html">Checkout</a></li>
                                        <li><a href="product-wishlist.html">Wishlist</a></li>
                                        <li><a href="product-compare.html">Compare</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li class="has-submenu"><a href="blog.html">Blog</a>
                            <ul class="submenu-nav">
                                <li class="has-submenu"><a href="#/">Blog Layout</a>
                                    <ul class="submenu-nav">
                                        <li><a href="blog.html">Blog Grid</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="account-login.html">Pages</a>
                            <ul class="submenu-nav">
                                <li><a href="account-login.html">My Account</a></li>
                                <li><a href="faq.html">Frequently Questions</a></li>
                                <li><a href="page-not-found.html">Page Not Found</a></li>
                            </ul>
                        </li> -->
                        <li><a href="/contact">Contact</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-7 col-lg-3 col-xl-4">
                <div class="header-action justify-content-end">
                   
<!-- 
                    <button class="header-action-btn" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#AsideOffcanvasCart" aria-controls="AsideOffcanvasCart">
                        <span class="icon">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect class="icon-rect" width="30" height="30" fill="url(#pattern2)" />
                                <defs>
                                    <pattern id="pattern2" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_504:9" transform="scale(0.0333333)" />
                                    </pattern>
                                    <image id="image0_504:9" width="30" height="30"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABFUlEQVRIie2VMU7DMBSGvwAqawaYuAmKxCW4A1I5Qg4AA93KBbp1ZUVUlQJSVVbCDVhgzcTQdLEVx7WDQ2xLRfzSvzzb+d6zn2MYrkugBBYevuWsHKiFn2JBMwH8Bq6Aw1jgBwHOYwGlPgT4LDZ4I8BJDNiEppl034UEJ8DMAJ0DByHBACPgUYEugePQUKkUWAmnsaB/Ry/YO9aXCwlT72AdrqaWEohwBWxSwc8ReIVtYIr5bM5pXqO+Men7rozGlkVSv4lJj1WQfsbvXVkNVNk1eEK4ik9/yuwzAPhLh5iuU4jtftMDR4ZJJXChxTJ2H3zXGDgWc43/X2Wro8G81a8u2fXU2nXiLVAxvNIKuPGW/r/2SltF+a3Rkw4pmwAAAABJRU5ErkJggg==" />
                                </defs>
                            </svg>
                        </span>
                    </button> -->

                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashborad</a>
                        @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log
                            in</a>
                        @endauth
                    </div>
                    @endif


                    <button class="header-menu-btn" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>