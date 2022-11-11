<div>
    <?php
function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka);
	return $hasil_rupiah;
 
}
?>
    <!--== Start Page Header Area Wrapper ==-->
    <section class="page-header-area pt-10 pb-9" style="background-color:#F9F6EE" s>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="page-header-st3-content text-center text-md-start">

                        <h2 class="page-header-title">All Products</h2>
                    </div>
                </div>
                <div class="col-md-7">
                    <h5 class="showing-pagination-results mt-5 mt-md-9 text-center text-md-end">Showing {{$count}} Results</h5>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Shop Top Bar Area Wrapper ==-->
    <div class="shop-top-bar-area">
        <div class="container">
            <br>
            <div class="d-flex justify-content-center">
                <div class="">
                    <div class="aside-search-form justify-content-center">
                        <label for="SearchInput" class="visually-hidden">Search</label>
                        <input id="SearchInput" wire:model="search" type="search" class="form-control"
                            placeholder="Search entire store…">
                        <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
    <!--== End Shop Top Bar Area Wrapper ==-->

    <!--== Start Product Category Area Wrapper ==-->
    <section class="section-space pb-0">
        <div class="container">
            <div class="row g-3 g-sm-6 justify-content-center">
                <div class="col-6 col-lg-4 col-lg-2 col-xl-2">
                    <!--== Start Product Category Item ==-->
                    <a wire:click.prevent="sortBy('')" role="button" href="#" class="product-category-item"
                        style="background-color:#F9F6EE">
                        <img class="icon" src="assets/images/shop/category/1.webp" width="80" height="80"
                            alt="Image-HasTech">
                        <h3 class="title">All</h3>
                        <span class="flag-new">new</span>
                    </a>
                    <!--== End Product Category Item ==-->
                </div>
                <div class="col-6 col-lg-4 col-lg-2 col-xl-2">
                    <!--== Start Product Category Item ==-->
                    <a wire:click.prevent="sortBy('Skin Care')" role="button" href="#" class="product-category-item"
                        style="background-color:#F9F6EE">
                        <img class="icon" src="assets/images/shop/category/2.webp" width="80" height="80"
                            alt="Image-HasTech">
                        <h3 class="title">Skin care</h3>
                    </a>
                    <!--== End Product Category Item ==-->
                </div>
                <div class="col-6 col-lg-4 col-lg-2 col-xl-2 mt-lg-0 mt-sm-6 mt-4">
                    <!--== Start Product Category Item ==-->
                    <a wire:click.prevent="sortBy('Treatment')" role="button" href="#" class="product-category-item"
                        style="background-color:#F9F6EE">
                        <img class="icon" src="assets/images/shop/category/3.webp" width="80" height="80"
                            alt="Image-HasTech">
                        <h3 class="title">Treatment</h3>
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
            @if($sortField!==false)
            <div class="section-title text-center">
                <p>Sort By {{$sortField}}</p>
            </div>
            @endif
            <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">
                @foreach ($product as $products)
                <div class="col-6 col-lg-4 mb-4 mb-sm-8">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                        <div class="product-thumb">
                            <a class="d-block" href="{{env('APP_URL')}}/catalog/{{$products->url}}">
                                <img src="product/{{$products->image}}" width="370" height="450" alt="Image-HasTech">
                            </a>
                            @if(isset($products->status))
                            <span class="flag-new">{{$products->status}}</span>
                            @endif
                            <div class="product-action">
                                <button type="button" class="product-action-btn action-btn-quick-view"
                                    data-bs-toggle="modal" data-bs-target="#action-QuickViewModal{{$products->id}}">
                                    <i class="fa fa-expand"></i>
                                </button>
                                 <a href="/whatsapp?id={{$products->id}}" target="_blank" rel="nofollow" class="product-action-btn action-btn-cart">
                                    <span>Beli Sekarang</span>
                                </a>
                                <button type="button" class="product-action-btn action-btn-wishlist"
                                    data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                    <i class="fa fa-heart-o"></i>
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-rating">
                                <div class="rating">
                                    @for ($i = 0; $i < (int)$products->star; $i++)
                                        <i class="fa fa-star"></i>
                                        @endfor
                                        @if ((float)$products->star-$i==0.5)
                                        <i class="fa fa-star-half-o"></i>
                                        @endif
                                </div>
                                <div class="reviews">{{$products->review}} reviews</div>
                            </div>
                            <h4 class="title"><a
                                    href="{{env('APP_URL')}}/catalog/{{$products->url}}">{{$products->judul}}</a></h4>
                            <div class="prices">
                                <span class="price">{{rupiah($products->harga)}}</span>
                                @if(isset($products->diskon))
                                <span class="price-old">{{rupiah($products->diskon)}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="product-action-bottom">
                            <button type="button" class="product-action-btn action-btn-quick-view"
                                data-bs-toggle="modal" data-bs-target="#action-QuickViewModal{{$products->id}}">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal"
                                data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <a href="/whatsapp?id={{$products->id}}" target="_blank" rel="nofollow"
                                class="product-action-btn action-btn-cart">
                                <span>Beli Sekarang</span>
                            </a>
                        </div>
                    </div>
                    <!--== End prPduct Item ==-->
                </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    {{ $product->links() }}
                </div>
            </div>
        </div>
    </section>
    <!--== End Product Area Wrapper ==-->

    <!--== Start Product Banner Area Wrapper ==-->
    <section>
        <div class="container">
            <!--== Start Product Category Item ==-->
            <a href="{{env('APP_URL')}}/catalog" class="product-banner-item">
                <img src="assets/images/shop/banner/banner.png" width="1170" height="240" alt="Image-HasTech">
            </a>
            <!--== End Product Category Item ==-->
        </div>
    </section>
    <!--== End Product Banner Area Wrapper ==-->


    @foreach ($product as $products)
    <aside class="product-cart-view-modal modal fade" id="action-QuickViewModal{{$products->id}}" tabindex="-1"
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
                                                @for ($i = 0; $i < (int)$products->star; $i++)
                                                    <i class="fa fa-star"></i>
                                                    @endfor
                                                    @if ((float)$products->star-$i==0.5)
                                                    <i class="fa fa-star-half-o"></i>
                                                    @endif
                                            </div>
                                            <button type="button" class="product-review-show">{{$products->review}}
                                                reviews</button>
                                        </div>
                                        <p class="mb-6"><?=$products->deskripsi?></p>
                                        <div class="product-details-pro-qty">
                                            <div class="pro-qty">
                                                <input type="text" title="Quantity" value="01">
                                            </div>
                                        </div>
                                        <div class="product-details-action">
                                            <h5>{{rupiah($products->harga)}}</h5>
                                            <div class="product-details-cart-wishlist">
                                            <a href="/whatsapp?id={{$products->id}}" target="_blank" rel="nofollow" class="btn">
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
</div>