@extends('component.wrapper')

@section('content')
    <main class="main-content">

        <!--== Start Hero Area Wrapper ==-->
        <section class="hero-slider-area position-relative">
            <div class="swiper hero-slider-container" style="height: 850px;">
                <div class="swiper-wrapper">


                    <div class="swiper-slide hero-slide-item">
                        <div class="container">
                            <div class="row align-items-center position-relative">
                                <div class="col-12 col-md-6">
                                    <div class="hero-slide-content">
                                        <div class="hero-slide-text-img"><img src="assets/images/slider/test-logo2.png"
                                                width="327" height="132" alt="Diarika Beauty Official Website"></div>
                                        <h2 class="hero-slide-title" style="padding-top: 50px;">Beauty & Fresh</h2>
                                        <p class="hero-slide-desc">Glow up your skin & find your truly beauty</p>
                                        <a class="btn btn-border-dark" href="{{ env('APP_URL') }}/catalog">Beli Sekarang</a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6" style="padding-top: 100px;">
                                    <div class="hero-slide-thumb">
                                        <img src="assets/images/FPK202206212-removebg-preview.png" width="841"
                                            height="832" alt="Diarika Beauty Official Website">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- <div class="hero-slide-text-shape"><img src="assets/images/slider/text1.webp" width="70"
                                height="955" alt="Diarika Beauty Official Website"></div> -->
                        <div class="hero-slide-social-shape"></div>
                    </div>
                    <div class="swiper-slide hero-slide-item">
                        <div class="container">
                            <div class="row align-items-center position-relative">
                                <div class="col-12 col-md-6">
                                    <div class="hero-slide-content">
                                        <div class="hero-slide-text-img"><img src="assets/images/slider/test-logo2.png"
                                                width="327" height="132" alt="Diarika Beauty Official Website"></div>
                                        <h2 class="hero-slide-title" style="padding-top: 50px;"> Beauty & Fresh</h2>
                                        <p class="hero-slide-desc">Glow up your skin & find your truly beauty</p>
                                        <a class="btn btn-border-dark" href="{{ env('APP_URL') }}/catalog">Beli Sekarang</a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6" style="padding-top: 100px;">
                                    <div class="hero-slide-thumb">
                                        <img src="assets/images/FPK202206213-removebg-preview.png" width="841"
                                            height="832" alt="Diarika Beauty Official Website">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- <div class="hero-slide-text-shape"><img src="assets/images/slider/text1.webp" width="70"
                                height="955" alt="Diarika Beauty Official Website"></div> -->
                        <div class="hero-slide-social-shape"></div>
                    </div>
                    <div class="swiper-slide hero-slide-item">
                        <div class="container">
                            <div class="row align-items-center position-relative">
                                <div class="col-12 col-md-6">
                                    <div class="hero-slide-content">
                                        <div class="hero-slide-text-img"><img src="assets/images/slider/test-logo2.png"
                                                width="327" height="132" alt="Diarika Beauty Official Website"></div>
                                        <h6 class="hero-slide-title" style="padding-top: 50px;">Beauty & Fresh</h6>
                                        <p class="hero-slide-desc">Glow up your skin & find your truly beauty</p>
                                        <a class="btn btn-border-dark" href="{{ env('APP_URL') }}/catalog">Beli Sekarang</a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6" style="padding-top: 100px;">
                                    <div class="hero-slide-thumb">
                                        <img src="assets/images/FPK202206214-removebg-preview.png" width="841"
                                            height="832" alt="Diarika Beauty Official Website">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- <div class="hero-slide-text-shape"><img src="assets/images/slider/text1.webp" width="70"
                                height="955" alt="Diarika Beauty Official Website"></div> -->
                        <div class="hero-slide-social-shape"></div>
                    </div>




                </div>
                <!--== Add Pagination ==-->
                <div class="hero-slider-pagination"></div>
            </div>
            <div class="hero-slide-social-media">
                <a href="https://shopee.co.id/diarika_beauty_official" target="_blank" rel="noopener">
                    <img src="/icon/shopee.png" alt="Diarika Beauty">
                </a>
                <a href="https://www.instagram.com/diarika_beauty_official/" target="_blank" rel="noopener">
                    <img src="/icon/instagram.png" alt="Diarika Beauty">
                </a>
                <a href="https://www.lazada.co.id/shop/diarika-beauty-office" target="_blank" rel="noopener">
                    <img src="/icon/lazada.png" alt="Diarika Beauty" width="25px">
                </a>
                <a href="https://wa.me/6281395121992" target="_blank" rel="noopener">
                    <img src="/icon/whatsapp.png" alt="Diarika Beauty" width="20px">
                </a>
                <a href="https://wa.me/6281395112011" target="_blank" rel="noopener">
                    <img src="/icon/whatsapp.png" alt="Diarika Beauty" width="20px">
                </a>
            </div>
        </section>
        <!--== End Hero Area Wrapper ==-->

        <!--== Start Product Category Area Wrapper ==-->
        <section class="section-space pb-0">
            <div class="container">
                <div class="row g-3 g-sm-6 justify-content-center">
                    <div class="col-6 col-lg-4 col-lg-2 col-xl-2">
                        <!--== Start Product Category Item ==-->
                        <a href="/catalog" class="product-category-item" data-bg-color="#F9F6EE">
                            <img class="icon" src="assets/images/shop/category/1.webp" width="70" height="80"
                                alt="Diarika Beauty Official Website">
                            <h3 class="title">All</h3>
                            <span class="flag-new">new</span>
                        </a>
                        <!--== End Product Category Item ==-->
                    </div>
                    <div class="col-6 col-lg-4 col-lg-2 col-xl-2">
                        <!--== Start Product Category Item ==-->
                        <a href="/catalog" class="product-category-item" data-bg-color="#F9F6EE">
                            <img class="icon" src="assets/images/shop/category/2.webp" width="80" height="80"
                                alt="Diarika Beauty Official Website">
                            <h3 class="title">Treatment</h3>
                        </a>
                        <!--== End Product Category Item ==-->
                    </div>
                    <div class="col-6 col-lg-4 col-lg-2 col-xl-2 mt-lg-0 mt-sm-6 mt-4">
                        <!--== Start Product Category Item ==-->
                        <a href="/catalog" class="product-category-item" data-bg-color="#F9F6EE">
                            <img class="icon" src="assets/images/shop/category/3.webp" width="80" height="80"
                                alt="Diarika Beauty Official Website">
                            <h3 class="title">Skin Care</h3>
                        </a>
                        <!--== End Product Category Item ==-->
                    </div>

                </div>
            </div>
        </section>
        <!--== End Product Category Area Wrapper ==-->

        <!--== Start Product Area Wrapper ==-->
        <livewire:home />

        <!--== End Product Area Wrapper ==-->



        <!--== End Blog Area Wrapper ==-->

        <!--== Start News Letter Area Wrapper ==-->
        <section class="section-space pt-0">
            <div class="container">
                <div class="newsletter-content-wrap" data-bg-img="assets/images/photos/bg1.webp">
                    <div class="newsletter-content">
                        <div class="section-title mb-0">
                            <h2 class="title">Join with us</h2>

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
            <aside class="product-cart-view-modal modal fade" id="action-QuickViewModal{{ $products->id }}"
                tabindex="-1" aria-hidden="true">
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
                                                <img src="product/{{ $products->image }}" width="544" height="560"
                                                    alt="Diarika Beauty Official Website">
                                            </div>
                                            <!--== End Product Thumbnail Area ==-->
                                        </div>
                                        <div class="col-lg-6">
                                            <!--== Start Product Info Area ==-->
                                            <div class="product-details-content">
                                                <h5 class="product-details-collection">{{ $products->kategori }}</h5>
                                                <h3 class="product-details-title">{{ $products->judul }}</h3>
                                                <div class="product-details-review mb-5">
                                                    <div class="product-review-icon">
                                                        @for ($j = 0; $j < (int) $products->star; $j++)
                                                            <i class="fa fa-star"></i>
                                                        @endfor
                                                        @if ((float) $products->star - $j == 0.5)
                                                            <i class="fa fa-star-half-o"></i>
                                                        @endif
                                                    </div>
                                                    <button type="button"
                                                        class="product-review-show">{{ $products->review }}
                                                        reviews</button>
                                                </div>
                                                <p class="mb-6"><?= $products->deskripsi ?></p>
                                                <div class="product-details-pro-qty">
                                                    <div class="pro-qty">
                                                        <input type="text" title="Quantity" value="01">
                                                    </div>
                                                </div>
                                                <div class="product-details-action">
                                                    <h5 class="price">{{ rupiah($products->harga) }}</h5>
                                                    <div class="product-details-cart-wishlist">

                                                        <a href="/whatsapp?id={{ $products->id }}" target="_blank"
                                                            rel="nofollow" class="btn">
                                                            <span>Beli Sekarang</span>
                                                        </a>
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

@section('css')
    <meta property="og:image" content="{{ env('APP_URL') }}/assets/images/tm.png" />
    <meta property="og:site_name" content="Diarika Beauty" />
    <title>Diarika Beauty - Glow up your skin & find your truly beauty</title>
    <meta property="og:title" content="Diarika Beauty" />
    <meta name="description"
        content="Selamat datang di Diarika Beauty - Destinasi Utama untuk Produk Kecantikan Berkualitas. Temukan berbagai produk perawatan kulit, kosmetik, dan tips kecantikan yang kami tawarkan untuk Anda."
        itemprop="description" />
    <meta name="originalTitle" content="Diarika Beauty - Beranda" />
    <meta property="og:description"
        content="Selamat datang di Diarika Beauty - Destinasi Utama untuk Produk Kecantikan Berkualitas. Temukan berbagai produk perawatan kulit, kosmetik, dan tips kecantikan yang kami tawarkan untuk Anda." />
    <meta
        content="Selamat datang di Diarika Beauty - Destinasi Utama untuk Produk Kecantikan Berkualitas. Temukan berbagai produk perawatan kulit, kosmetik, dan tips kecantikan yang kami tawarkan untuk Anda." />
    <meta name="twitter:description"
        content="Selamat datang di Diarika Beauty - Destinasi Utama untuk Produk Kecantikan Berkualitas. Temukan berbagai produk perawatan kulit, kosmetik, dan tips kecantikan yang kami tawarkan untuk Anda." />
@endsection
