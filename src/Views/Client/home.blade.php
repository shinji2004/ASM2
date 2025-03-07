@extends('layouts.app')

@section('banner')
    <div class="banner text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <h1 class="mb-5">Tech It Easy <br> Try Brand New Products</h1>
                </div>
            </div>
        </div>


        <svg class="banner-shape-1" width="39" height="40" viewBox="0 0 39 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306"
                stroke-miterlimit="10" />
            <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
            <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
                stroke-miterlimit="10" />
        </svg>

        <svg class="banner-shape-2" width="39" height="39" viewBox="0 0 39 39" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d)">
                <path class="path"
                    d="M24.1587 21.5623C30.02 21.3764 34.6209 16.4742 34.435 10.6128C34.2491 4.75147 29.3468 0.1506 23.4855 0.336498C17.6241 0.522396 13.0233 5.42466 13.2092 11.286C13.3951 17.1474 18.2973 21.7482 24.1587 21.5623Z" />
                <path
                    d="M5.64626 20.0297C11.1568 19.9267 15.7407 24.2062 16.0362 29.6855L24.631 29.4616L24.1476 10.8081L5.41797 11.296L5.64626 20.0297Z"
                    stroke="#040306" stroke-miterlimit="10" />
            </g>
            <defs>
                <filter id="filter0_d" x="0.905273" y="0" width="37.8663" height="38.1979" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                    <feOffset dy="4" />
                    <feGaussianBlur stdDeviation="2" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                </filter>
            </defs>
        </svg>


        <svg class="banner-shape-3" width="39" height="40" viewBox="0 0 39 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306"
                stroke-miterlimit="10" />
            <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
            <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
                stroke-miterlimit="10" />
        </svg>


        <svg class="banner-border" height="240" viewBox="0 0 2202 240" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M1 123.043C67.2858 167.865 259.022 257.325 549.762 188.784C764.181 125.427 967.75 112.601 1200.42 169.707C1347.76 205.869 1901.91 374.562 2201 1"
                stroke-width="2" />
        </svg>
    </div>
    </div>
@endsection
@section('content')
    <div class="container">

        <section class="section-sm">

            <div class="container">
                <h2>Sản phẩm mới</h2>

                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card border-0 rounded-0 text-center shadow-none overflow-hidden">
                                <a href="{{ asset('products/' . $product['id']) }}">
                                    <span class="badge badge-primary">NEW</span>
                                    <img src="{{ asset($product['img_thumbnail']) }}" width="100px" alt=""
                                        class="card-img-top rounded-0">
                                    <div class="card-body">
                                        <h4 class="text-uppercase mb-2">{{ $product['name'] }}</h4>
                                        <div class="d-flex align-items-baseline justify-content-center">
                                            <p class="price-sale mr-1" style="color: red; font-size: 1.5rem;">
                                                ${{ $product['price_sale'] }}</p>
                                            <p class="price-regular me-3"
                                                style="font-size: 1.2rem; text-decoration: line-through;">
                                                ${{ $product['price_regular'] }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <h2>Top sản phẩm được yêu thích</h2>
                <div class="row">
                
                    @foreach ($topProducts as $top)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card border-0 rounded-0 text-center shadow-none overflow-hidden">
                                <a href="{{ asset('products/' . $top['id']) }}">
                                    <span class="badge badge-danger">HOT</span>
                                    <img src="{{ asset($top['img_thumbnail']) }}" width="100px" alt=""
                                        class="card-img-top rounded-0">
                                    <div class="card-body">
                                        <h4 class="text-uppercase mb-2">{{ $top['name'] }}</h4>
                                        <div class="d-flex align-items-baseline justify-content-center">
                                            <p class="price-sale mr-1" style="color: red; font-size: 1.5rem;">
                                                ${{ $top['price_sale'] }}</p>
                                            <p class="price-regular me-3"
                                                style="font-size: 1.2rem; text-decoration: line-through;">
                                                ${{ $top['price_regular'] }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


            <div class="col-12 text-center mt-5">
                <ul class="pagination justify-content-center">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center pagination-lg">
                            {{-- Nút về trang đầu --}}
                            <li class="page-item {{ $currentPage == 1 ? 'disabled' : '' }}">
                                <a class="page-link" href="?page=1" aria-label="First">
                                    <span aria-hidden="true">&laquo;&laquo;</span>
                                </a>
                            </li>

                            {{-- Nút về trang trước --}}
                            @if ($currentPage > 1)
                                <li class="page-item">
                                    <a class="page-link" href="?page={{ $currentPage - 1 }}" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                            @endif

                            {{-- Hiển thị số trang --}}
                            @php
                                $startPage = max(1, $currentPage - 1);
                                $endPage = min($totalPage, $currentPage + 1);
                            @endphp

                            @for ($i = $startPage; $i <= $endPage; $i++)
                                <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                                    <a class="page-link" href="?page={{ $i }}">{{ $i }}</a>
                                </li>
                            @endfor

                            {{-- Nút đến trang sau --}}
                            @if ($currentPage < $totalPage)
                                <li class="page-item">
                                    <a class="page-link" href="?page={{ $currentPage + 1 }}" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            @endif

                            {{-- Nút đến trang cuối --}}
                            <li class="page-item {{ $currentPage == $totalPage ? 'disabled' : '' }}">
                                <a class="page-link" href="?page={{ $totalPage }}" aria-label="Last">
                                    <span aria-hidden="true">&raquo;&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </ul>
            </div>

    </div>
    </div>
    </section>



    </div>
    </section>
@endsection
