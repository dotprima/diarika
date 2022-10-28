<div>
    <section class="section-space">

        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-5">
                    <div class="aside-search-form justify-content-center">
                        <label for="SearchInput" class="visually-hidden">Search</label>
                        <input id="SearchInput" wire:model="search" type="search" class="form-control"
                            placeholder="Search entire store…">
                        <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
            <br>
            <br>

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
                            <a class="d-block" href="{{env('APP_URL')}}/catalog/{{$products->url}}">
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
                                    @for ($i = 0; $i < (int)$products->star; $i++)
                                        <i class="fa fa-star"></i>
                                        @endfor
                                        @if ((float)$products->star-$i==0.5)
                                        <i class="fa fa-star-half-o"></i>
                                        @endif
                                </div>
                                <div class="reviews">{{$products->review}} reviews</div>
                            </div>
                            <h4 class="title"><a href="{{env('APP_URL')}}/catalog/{{$products->url}}">{{$products->judul}}</a></h4>
                            <div class="prices">
                                <span class="price">{{$products->harga}}</span>
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
</div>