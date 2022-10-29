@extends('component.wrapper')

@section('content')
<?php
function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka);
	return $hasil_rupiah;
 
}
?>
<main class="main-content">

    <!--== Start Page Header Area Wrapper ==-->
    <section class="page-header-area pt-10 pb-9" data-bg-color="#FFF3DA">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="page-header-st3-content text-center text-md-start">

                        <h2 class="page-header-title">Product Detail</h2>
                    </div>
                </div>
                <div class="col-md-7">
                    <h5 class="showing-pagination-results mt-5 mt-md-9 text-center text-md-end">Showing Single Product
                    </h5>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Product Details Area Wrapper ==-->
    <section class="section-space">
        <div class="container">
            <div class="row product-details">
                <div class="col-lg-6">
                    <div class="product-details-thumb">
                        <img src="{{env('APP_URL')}}/product/{{$productInfo->image}}" width="570" height="693"
                            alt="Image">
                        <span class="flag-new">new</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-details-content">
                        <h5 class="product-details-collection">{{$productInfo->kategori}}</h5>
                        <h3 class="product-details-title">{{$productInfo->judul}}</h3>
                        <div class="product-details-review">
                            <div class="product-review-icon">
                                @for ($i = 0; $i < (int)$productInfo->star; $i++)
                                    <i class="fa fa-star"></i>
                                    @endfor
                                    @if ((float)$productInfo->star-$i==0.5)
                                    <i class="fa fa-star-half-o"></i>
                                    @endif
                            </div>
                            <button type="button" class="product-review-show">{{$productInfo->review}} reviews</button>
                        </div>
                        <div class="product-details-qty-list">
                            <div class="qty-list-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="qtyList1"
                                    checked>
                                <label class="form-check-label" for="qtyList1">{{$productInfo->ukuran}}
                                    <b>{{rupiah($productInfo->harga)}}</b></label>
                            </div>
                        </div>
                        <div class="product-details-pro-qty">
                            <div class="pro-qty">
                                <input type="text" title="Quantity" value="01">
                            </div>
                        </div>
                        <div class="product-details-shipping-cost">
                            <input class="form-check-input" type="checkbox" value="" id="ShippingCost" checked>
                            <label class="form-check-label" for="ShippingCost">Dirikim dari Ciamis</label>
                        </div>
                        <div class="product-details-action">
                            <h5>{{rupiah($productInfo->harga)}}</h5>
                            <div class="product-details-cart-wishlist">
                                <button type="button" class="btn-wishlist" data-bs-toggle="modal"
                                    data-bs-target="#action-WishlistModal"><i class="fa fa-heart-o"></i></button>
                                <button type="button" class="btn" data-bs-toggle="modal"
                                    data-bs-target="#action-CartAddModal">Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="nav product-details-nav" id="product-details-nav-tab" role="tablist">
                        <button class="nav-link" id="specification-tab" data-bs-toggle="tab"
                            data-bs-target="#specification" type="button" role="tab" aria-controls="specification"
                            aria-selected="false">Deskripsi</button>

                    </div>
                    <div class="tab-content" id="product-details-nav-tabContent">
                        <div class="tab-pane fade show active" id="specification" role="tabpanel"
                            aria-labelledby="specification-tab">
                            
                            <?= $productInfo->deskripsi?>
                        </div>


                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="product-reviews-form-wrap">
                        <h4 class="product-form-title">Leave a replay</h4>
                        <div class="product-reviews-form">
                            <form action="#">
                                <div class="form-input-item">
                                    <textarea class="form-control" placeholder="Enter you feedback"></textarea>
                                </div>
                                <div class="form-input-item">
                                    <input class="form-control" type="text" placeholder="Full Name">
                                </div>
                                <div class="form-input-item">
                                    <input class="form-control" type="email" placeholder="Email Address">
                                </div>
                                <div class="form-input-item">
                                    <div class="form-ratings-item">
                                        <select id="product-review-form-rating-select" class="select-ratings">
                                            <option value="1">01</option>
                                            <option value="2">02</option>
                                            <option value="3">03</option>
                                            <option value="4">04</option>
                                            <option value="5">05</option>
                                        </select>
                                        <span class="title">Provide Your Ratings</span>
                                        <div class="product-ratingsform-form-wrap">
                                            <div class="product-ratingsform-form-icon">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div id="product-review-form-rating"
                                                class="product-ratingsform-form-icon-fill">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviews-form-checkbox">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="ReviewsFormCheckbox" checked>
                                        <label class="form-check-label" for="ReviewsFormCheckbox">Provide ratings
                                            anonymously.</label>
                                    </div>
                                </div>
                                <div class="form-input-item mb-0">
                                    <button type="submit" class="btn">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Product Details Area Wrapper ==-->

    <!--== Start Product Banner Area Wrapper ==-->
    <div class="container">
        <!--== Start Product Category Item ==-->
        <a href="{{env('APP_URL')}}/catalog" class="product-banner-item">
            <img src="{{env('APP_URL')}}/assets/images/shop/banner/banner.png" width="1170" height="240"
                alt="Image-HasTech">
        </a>
        <!--== End Product Category Item ==-->
    </div>
    <!--== End Product Banner Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="title">Related Products</h2>
                        <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit
                            amet luctus venenatis</p>
                    </div>
                </div>
            </div>
            <div class="row mb-n10">
                <div class="col-12">
                    <div class="swiper related-product-slide-container">
                        <div class="swiper-wrapper">

                            @foreach ($product as $products)
                            <div class="swiper-slide mb-10">
                                <!--== Start Product Item ==-->
                                <div class="product-item product-st2-item">
                                    <div class="product-thumb">
                                        <a class="d-block" href="{{env('APP_URL')}}/catalog/{{$products->url}}">
                                            <img src="{{env('APP_URL')}}/product/{{$products->image}}" width="370"
                                                height="450" alt="Image-HasTech">
                                        </a>
                                        <span class="flag-new">new</span>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-rating">
                                            <div class="rating">
                                                @for ($j = 0; $j < (int)$products->star; $j++)
                                                    <i class="fa fa-star"></i>
                                                    @endfor
                                                    @if ((float)$products->star-$i==0.5)
                                                    <i class="fa fa-star-half-o"></i>
                                                    @endif
                                            </div>
                                            <div class="reviews">{{$products->review}} reviews</div>
                                        </div>
                                        <h4 class="title"><a
                                                href="{{env('APP_URL')}}/catalog/{{$products->url}}">{{$products->judul}}</a>
                                        </h4>
                                        <div class="prices">
                                            <span class="price">{{rupiah($products->harga)}}</span>
                                            <span class="price-old">300.00</span>
                                        </div>
                                        <div class="product-action">
                                            <button type="button" class="product-action-btn action-btn-cart"
                                                data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                <span>Add to cart</span>
                                            </button>
                                            <button type="button" class="product-action-btn action-btn-quick-view"
                                                data-bs-toggle="modal"
                                                data-bs-target="#action-QuickViewModal{{$products->_id}}">
                                                <i class="fa fa-expand"></i>
                                            </button>
                                            <button type="button" class="product-action-btn action-btn-wishlist"
                                                data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!--== End prPduct Item ==-->
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Product Area Wrapper ==-->
    @foreach ($product as $products)
    <aside class="product-cart-view-modal modal fade" id="action-QuickViewModal{{$products->_id}}" tabindex="-1"
        aria-hidden="true">
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
                                        <img src="{{env('APP_URL')}}/product/{{$products->image}}" width="544"
                                            height="560" alt="Image-HasTech">
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
                                                @for ($j = 0; $j < (int)$products->star; $j++)
                                                    <i class="fa fa-star"></i>
                                                    @endfor
                                                    @if ((float)$products->star-$j==0.5)
                                                    <i class="fa fa-star-half-o"></i>
                                                    @endif
                                            </div>
                                            <button type="button" class="product-review-show">{{$products->review}} reviews</button>
                                        </div>
                                        <p class="mb-6"><?=$products->deskripsi?></p>
                                        <div class="product-details-pro-qty">
                                            <div class="pro-qty">
                                                <input type="text" title="Quantity" value="01">
                                            </div>
                                        </div>
                                        <div class="product-details-action">
                                            <h5 >{{rupiah($products->harga)}}</h5>
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
</main>

@endsection