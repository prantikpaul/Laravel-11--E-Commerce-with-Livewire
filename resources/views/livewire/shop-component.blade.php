<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Shop
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="shop-product-fillter">
                            <div class="totall-product">
                                <p> We found <strong class="text-brand">688</strong> items for you!</p>
                            </div>
                            <div class="sort-by-product-area">
                                <div class="sort-by-cover mr-10">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps"></i>Show:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="#">50</a></li>
                                            <li><a href="#">100</a></li>
                                            <li><a href="#">150</a></li>
                                            <li><a href="#">200</a></li>
                                            <li><a href="#">All</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sort-by-cover">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="#">Featured</a></li>
                                            <li><a href="#">Price: Low to High</a></li>
                                            <li><a href="#">Price: High to Low</a></li>
                                            <li><a href="#">Release Date</a></li>
                                            <li><a href="#">Avg. Rating</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row product-grid-3">

                            @foreach($products as $p )
                            <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('details',['slug'=>$p->slug])}}">
                                                <img class="default-img" src="{{$p->image}}" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Music</a>
                                        </div>
                                        <h2><a href="{{route('details',['slug'=>$p->slug])}}">{{$p->name}}</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>৳{{$p->sale_price}}</span>
                                            <span class="old-price">৳{{$p->regular_price}}</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

{{--                            <div class="col-lg-4 col-md-4 col-6 col-sm-6">--}}
{{--                                <div class="product-cart-wrap mb-30">--}}
{{--                                    <div class="product-img-action-wrap">--}}
{{--                                        <div class="product-img product-img-zoom">--}}
{{--                                            <a href="product-details.html">--}}
{{--                                                <img class="default-img" src="assets/imgs/shop/product-3-1.jpg" alt="">--}}
{{--                                                <img class="hover-img" src="assets/imgs/shop/product-3-2.jpg" alt="">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-action-1">--}}
{{--                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">--}}
{{--                                                <i class="fi-rs-search"></i></a>--}}
{{--                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>--}}
{{--                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-badges product-badges-position product-badges-mrg">--}}
{{--                                            <span class="new">New</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-content-wrap">--}}
{{--                                        <div class="product-category">--}}
{{--                                            <a href="shop.html">Music</a>--}}
{{--                                        </div>--}}
{{--                                        <h2><a href="product-details.html">Cartoon Astronaut T-Shirts</a></h2>--}}
{{--                                        <div class="rating-result" title="90%">--}}
{{--                                            <span>--}}
{{--                                                <span>50%</span>--}}
{{--                                            </span>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-price">--}}
{{--                                            <span>$138.85 </span>--}}
{{--                                            <span class="old-price">$255.8</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-action-1 show">--}}
{{--                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-4 col-md-4 col-6 col-sm-6">--}}
{{--                                <div class="product-cart-wrap mb-30">--}}
{{--                                    <div class="product-img-action-wrap">--}}
{{--                                        <div class="product-img product-img-zoom">--}}
{{--                                            <a href="product-details.html">--}}
{{--                                                <img class="default-img" src="assets/imgs/shop/product-7-1.jpg" alt="">--}}
{{--                                                <img class="hover-img" src="assets/imgs/shop/product-7-2.jpg" alt="">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-action-1">--}}
{{--                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">--}}
{{--                                                <i class="fi-rs-search"></i></a>--}}
{{--                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>--}}
{{--                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-badges product-badges-position product-badges-mrg">--}}
{{--                                            <span class="best">Best Sell</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-content-wrap">--}}
{{--                                        <div class="product-category">--}}
{{--                                            <a href="shop.html">Watch</a>--}}
{{--                                        </div>--}}
{{--                                        <h2><a href="product-details.html">Plain Striola Shirts</a></h2>--}}
{{--                                        <div class="rating-result" title="90%">--}}
{{--                                            <span>--}}
{{--                                                <span>95%</span>--}}
{{--                                            </span>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-price">--}}
{{--                                            <span>$338.85 </span>--}}
{{--                                            <span class="old-price">$445.8</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-action-1 show">--}}
{{--                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-4 col-md-4 col-6 col-sm-6">--}}
{{--                                <div class="product-cart-wrap mb-30">--}}
{{--                                    <div class="product-img-action-wrap">--}}
{{--                                        <div class="product-img product-img-zoom">--}}
{{--                                            <a href="product-details.html">--}}
{{--                                                <img class="default-img" src="assets/imgs/shop/product-1-2.jpg" alt="">--}}
{{--                                                <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-action-1">--}}
{{--                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">--}}
{{--                                                <i class="fi-rs-search"></i></a>--}}
{{--                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>--}}
{{--                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-badges product-badges-position product-badges-mrg">--}}
{{--                                            <span class="sale">Sale</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-content-wrap">--}}
{{--                                        <div class="product-category">--}}
{{--                                            <a href="shop.html">Music</a>--}}
{{--                                        </div>--}}
{{--                                        <h2><a href="product-details.html">Landscape Painting Shirt</a></h2>--}}
{{--                                        <div class="rating-result" title="90%">--}}
{{--                                            <span>--}}
{{--                                                <span>70%</span>--}}
{{--                                            </span>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-price">--}}
{{--                                            <span>$123.85 </span>--}}
{{--                                            <span class="old-price">$235.8</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-action-1 show">--}}
{{--                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                        <!--pagination-->
                            </div>
                        <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
{{--                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">02</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">03</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">16</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#"><i class="fi-rs-angle-double-small-right"></i></a></li>--}}
                                    {{$products->links()}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                    @livewire('sidebar-component')
                    </div>

                </div>
            </div>
        </section>
    </main>
</div>
