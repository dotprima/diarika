@extends('component.wrapper')

@section('content')

<main class="main-content">

    <!--== Start Hero Area Wrapper ==-->
    <section class="hero-slider-area position-relative">
        <div class="swiper hero-slider-container" style="height: 830px;">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-slide-item">
                    <div class="container">
                        <div class="row align-items-center position-relative">
                            <div class="col-12 col-md-6">
                                <div class="hero-slide-content">
                                    <div class="hero-slide-text-img"><img src="assets/images/slider/text-theme.webp"
                                            width="427" height="232" alt="Image"></div>
                                    <h2 class="hero-slide-title">CLEAN FRESH</h2>
                                    <p class="hero-slide-desc">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit ut aliquam, purus sit amet luctus venenatis.</p>
                                    <a class="btn btn-border-dark" href="product.html">BUY NOW</a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6" style="padding-top: 100px;">
                                <div class="hero-slide-thumb">
                                    <img src="assets/images/FPK202206212-removebg-preview.png" width="841" height="832"
                                        alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide-text-shape"><img src="assets/images/slider/text1.webp" width="70"
                            height="955" alt="Image"></div>
                    <div class="hero-slide-social-shape"></div>
                </div>
            </div>
            <!--== Add Pagination ==-->
            <div class="hero-slider-pagination"></div>
        </div>
        <div class="hero-slide-social-media">
            <a href="https://www.pinterest.com/" target="_blank" rel="noopener"><i class="fa fa-pinterest-p"></i></a>
            <a href="https://twitter.com/" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a>
            <a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a>
        </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Product Category Area Wrapper ==-->
    <section class="section-space pb-0">
        <div class="container">
            <div class="row g-3 g-sm-6">
                <div class="col-6 col-lg-4 col-lg-2 col-xl-2">
                    <!--== Start Product Category Item ==-->
                    <a href="product.html" class="product-category-item" data-bg-color="#F9F6EE">
                        <img class="icon" src="assets/images/shop/category/1.webp" width="70" height="80"
                            alt="Image-HasTech">
                        <h3 class="title">Hare care</h3>
                        <span class="flag-new">new</span>
                    </a>
                    <!--== End Product Category Item ==-->
                </div>
                <div class="col-6 col-lg-4 col-lg-2 col-xl-2">
                    <!--== Start Product Category Item ==-->
                    <a href="product.html" class="product-category-item" data-bg-color="#F9F6EE">
                        <img class="icon" src="assets/images/shop/category/2.webp" width="80" height="80"
                            alt="Image-HasTech">
                        <h3 class="title">Skin care</h3>
                    </a>
                    <!--== End Product Category Item ==-->
                </div>
                <div class="col-6 col-lg-4 col-lg-2 col-xl-2 mt-lg-0 mt-sm-6 mt-4">
                    <!--== Start Product Category Item ==-->
                    <a href="product.html" class="product-category-item" data-bg-color="#F9F6EE">
                        <img class="icon" src="assets/images/shop/category/3.webp" width="80" height="80"
                            alt="Image-HasTech">
                        <h3 class="title">Lip stick</h3>
                    </a>
                    <!--== End Product Category Item ==-->
                </div>
                <div class="col-6 col-lg-4 col-lg-2 col-xl-2 mt-xl-0 mt-sm-6 mt-4">
                    <!--== Start Product Category Item ==-->
                    <a href="product.html" class="product-category-item" data-bg-color="#F9F6EE">
                        <img class="icon" src="assets/images/shop/category/4.webp" width="80" height="80"
                            alt="Image-HasTech">
                        <h3 class="title">Face skin</h3>
                        <span data-bg-color="#835BF4" class="flag-new">sale</span>
                    </a>
                    <!--== End Product Category Item ==-->
                </div>
                <div class="col-6 col-lg-4 col-lg-2 col-xl-2 mt-xl-0 mt-sm-6 mt-4">
                    <!--== Start Product Category Item ==-->
                    <a href="product.html" class="product-category-item" data-bg-color="#F9F6EE">
                        <img class="icon" src="assets/images/shop/category/5.webp" width="80" height="80"
                            alt="Image-HasTech">
                        <h3 class="title">Blusher</h3>
                    </a>
                    <!--== End Product Category Item ==-->
                </div>
                <div class="col-6 col-lg-4 col-lg-2 col-xl-2 mt-xl-0 mt-sm-6 mt-4">
                    <!--== Start Product Category Item ==-->
                    <a href="product.html" class="product-category-item" data-bg-color="#F9F6EE">
                        <img class="icon" src="assets/images/shop/category/6.webp" width="80" height="80"
                            alt="Image-HasTech">
                        <h3 class="title">Natural</h3>
                    </a>
                    <!--== End Product Category Item ==-->
                </div>
            </div>
        </div>
    </section>
    <!--== End Product Category Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Top sale</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet
                            luctus venenatis</p>
                    </div>
                </div>
            </div>
            <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">
                @foreach ($product as $products)
                <div class="col-6 col-lg-4 mb-4 mb-sm-9">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                        <div class="product-thumb">
                            <a class="d-block" href="product-details.html">
                                <img src="product/{{$products->image}}" width="370" height="450" alt="Image-HasTech">
                            </a>
                            <span class="flag-new">new</span>
                            <div class="product-action">
                                <button type="button" class="product-action-btn action-btn-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#action-QuickViewModal{{$products->_id}}">
                                    <i class="fa fa-expand"></i>
                                </button>
                                <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal"
                                    data-bs-target="#action-CartAddModal">
                                    <span>Add to cart</span>
                                </button>
                                <button type="button" class="product-action-btn action-btn-wishlist"
                                    data-bs-toggle="modal" data-bs-target="#action-WishlistModal{{$products->_id}}">
                                    <i class="fa fa-heart-o"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-rating">
                                <div class="rating">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="reviews">150 reviews</div>
                            </div>
                            <h4 class="title"><a href="product-details.html">{{$products->judul}}</a></h4>
                            <div class="prices">
                                <span class="price">$210.00</span>
                                <span class="price-old">300.00</span>
                            </div>
                        </div>
                        <div class="product-action-bottom">
                            <button type="button" class="product-action-btn action-btn-quick-view"
                                data-bs-toggle="modal" data-bs-target="#action-QuickViewModal{{$products->_id}}">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal"
                                data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal"
                                data-bs-target="#action-CartAddModal">
                                <span>Add to cart</span>
                            </button>
                        </div>
                    </div>
                    <!--== End prPduct Item ==-->
                </div>
                @endforeach
                <div class="product-action-bottom d-flex justify-content-center">
                    <button type="button" class="btn btn-primary">Load More</button>
                </div>
            </div>
        </div>
    </section>
    <!--== End Product Area Wrapper ==-->


    <!--== Start Blog Area Wrapper ==-->
    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Blog posts</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet
                            luctus venenatis</p>
                    </div>
                </div>
            </div>
            <div class="row mb-n9">
                <div class="col-sm-6 col-lg-4 mb-8">
                    <!--== Start Blog Item ==-->
                    <div class="post-item">
                        <a href="blog-details.html" class="thumb">
                            <img src="assets/images/blog/1.webp" width="370" height="320" alt="Image-HasTech">
                        </a>
                        <div class="content">
                            <a class="post-category" href="blog.html">beauty</a>
                            <h4 class="title"><a href="blog-details.html">Lorem ipsum dolor sit amet consectetur
                                    adipiscing.</a></h4>
                            <ul class="meta">
                                <li class="author-info"><span>By:</span> <a href="blog.html">Tomas De Momen</a>
                                </li>
                                <li class="post-date">February 13, 2022</li>
                            </ul>
                        </div>
                    </div>
                    <!--== End Blog Item ==-->
                </div>
                <div class="col-sm-6 col-lg-4 mb-8">
                    <!--== Start Blog Item ==-->
                    <div class="post-item">
                        <a href="blog-details.html" class="thumb">
                            <img src="assets/images/blog/2.webp" width="370" height="320" alt="Image-HasTech">
                        </a>
                        <div class="content">
                            <a class="post-category post-category-two" data-bg-color="#A49CFF"
                                href="blog.html">beauty</a>
                            <h4 class="title"><a href="blog-details.html">Facial Scrub is natural treatment for
                                    face.</a></h4>
                            <ul class="meta">
                                <li class="author-info"><span>By:</span> <a href="blog.html">Tomas De Momen</a>
                                </li>
                                <li class="post-date">February 13, 2022</li>
                            </ul>
                        </div>
                    </div>
                    <!--== End Blog Item ==-->
                </div>
                <div class="col-sm-6 col-lg-4 mb-8">
                    <!--== Start Blog Item ==-->
                    <div class="post-item">
                        <a href="blog-details.html" class="thumb">
                            <img src="assets/images/blog/3.webp" width="370" height="320" alt="Image-HasTech">
                        </a>
                        <div class="content">
                            <a class="post-category post-category-three" data-bg-color="#9CDBFF"
                                href="blog.html">beauty</a>
                            <h4 class="title"><a href="blog-details.html">Benefit of Hot Ston Spa for your
                                    health & life.</a></h4>
                            <ul class="meta">
                                <li class="author-info"><span>By:</span> <a href="blog.html">Tomas De Momen</a>
                                </li>
                                <li class="post-date">February 13, 2022</li>
                            </ul>
                        </div>
                    </div>
                    <!--== End Blog Item ==-->
                </div>
            </div>
        </div>
    </section>
    <!--== End Blog Area Wrapper ==-->

    <!--== Start News Letter Area Wrapper ==-->
    <section class="section-space pt-0">
        <div class="container">
            <div class="newsletter-content-wrap" data-bg-img="assets/images/photos/bg1.webp">
                <div class="newsletter-content">
                    <div class="section-title mb-0">
                        <h2 class="title">Join with us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam.</p>
                    </div>
                </div>
                <div class="newsletter-form">
                    <form>
                        <input type="email" class="form-control" placeholder="enter your email">
                        <button class="btn-submit" type="submit"><i class="fa fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--== End News Letter Area Wrapper ==-->

    <!--== Start Product Quick View Modal ==-->
    @foreach ($product as $products)
    <aside class="product-cart-view-modal modal fade" id="action-QuickViewModal{{$products->_id}}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="product-quick-view-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <span class="fa fa-close"></span>
                        </button>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!--== Start Product Thumbnail Area ==-->
                                    <div class="product-single-thumb">
                                        <img src="product/{{$products->image}}" width="544" height="560"
                                            alt="Image-HasTech">
                                    </div>
                                    <!--== End Product Thumbnail Area ==-->
                                </div>
                                <div class="col-lg-6">
                                    <!--== Start Product Info Area ==-->
                                    <div class="product-details-content">
                                        <h5 class="product-details-collection">{{$products->kategori}}</h5>
                                        <h3 class="product-details-title">{{$products->judul}}</h3>
                                        <div class="product-details-review mb-5">
                                            <div class="product-review-icon">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <button type="button" class="product-review-show">150 reviews</button>
                                        </div>
                                        <p class="mb-6">{{$products->deskripsi}}</p>
                                        <div class="product-details-pro-qty">
                                            <div class="pro-qty">
                                                <input type="text" title="Quantity" value="01">
                                            </div>
                                        </div>
                                        <div class="product-details-action">
                                            <h4 class="price">$254.22</h4>
                                            <div class="product-details-cart-wishlist">
                                                <button type="button" class="btn" data-bs-toggle="modal"
                                                    data-bs-target="#action-CartAddModal">Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Info Area ==-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    @endforeach
    <!--== End Product Quick View Modal ==-->

</main>

@endsection