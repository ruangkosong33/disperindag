@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => 'Harga Komoditi'])
@endsection

@section('content')
    <section class="space-top space-extra2-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">

                    <div class="row gy-40">
                        @forelse ($items as $item)
                            <div class="col-xl-3 col-sm-6">
                                <div class="th-product product-grid">
                                    <div class="product-img">
                                        <img src="{{asset('assets/img/product/product_1_1.jpg')}}" alt="Product Image">
                                        {{-- <div class="actions">
                                            <a href="#QuickView" class="icon-btn popup-content"><i
                                                    class="far fa-eye"></i></a>
                                            <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                        </div> --}}
                                    </div>
                                    <div class="product-content">

                                        <h3 class="product-title"><a href="#">{{$item->title}}</a></h3>
                                        <span class="price">Rp. {{ number_format($item->price, 0, ',', '.') }}</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            Tidak ada data
                        @endforelse
                    </div>
                    <div class="th-pagination text-center pt-50">
                        {{$items->links()}}
                    </div>
                </div>
                {{-- <div class="col-xl-3 col-lg-4">
                    <aside class="sidebar-area sidebar-shop">
                        <div class="widget widget_search  ">
                            <form class="search-form">
                                <input type="text" placeholder="Search Product...">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget widget_categories  ">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li><a href="service-details.html">Design</a><span>(08)</span></li>
                                <li><a href="service-details.html">Development</a> <span>(12)</span></li>
                                <li><a href="service-details.html">Photography</a><span>(15)</span></li>
                                <li><a href="service-details.html">Health</a><span>(21)</span></li>
                                <li><a href="service-details.html">Health</a><span>(14)</span></li>
                                <li><a href="service-details.html">Finance</a><span>(05)</span></li>
                                <li><a href="service-details.html">Technology</a><span>(10)</span></li>
                            </ul>
                        </div>
                        <div class="widget widget_price_filter  ">
                            <h4 class="widget_title">Filter By Price</h4>
                            <div class="price_slider_wrapper">
                                <div class="price_label">
                                    Price: <span class="from">$0</span> — <span class="to">$70</span>
                                </div>
                                <div class="price_slider"></div>
                                <button type="submit" class="button th-btn">Filter</button>
                            </div>
                        </div>
                        <div class="widget widget_tag_cloud   ">
                            <h3 class="widget_title">Tags</h3>
                            <div class="tagcloud">
                                <a href="blog.html">Bride</a>
                                <a href="blog.html">Celebration</a>
                                <a href="blog.html">Groom</a>
                                <a href="blog.html">Wedding</a>
                                <a href="blog.html">Photo</a>
                                <a href="blog.html">Dress</a>
                            </div>
                        </div>
                    </aside>
                </div> --}}
            </div>

        </div>
    </section>
@endsection
