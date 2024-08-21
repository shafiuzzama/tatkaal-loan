@extends('layouts/front_layouts')

@section('content')

<!-- ==================== Blog Start Here ==================== -->
<section class="blog-detials py-120" style="margin-top: 34px;">
    <div class="container">
        <hr style="height: 3px; color: #d98401;">

        <div class="row gy-5 justify-content-center">
            <div class="col-lg-8">
                <div class="row gy-lg-5 gy-4">
                    <div class="col-lg-12">
                        <div class="blog-item blog-details">
                            <div class="blog-item__thumb">
                                <img src="{{ asset('assets/img/blog-1.jpg') }}" alt="{{ $blog->heading }}" class="img-fluid">
                                <div class="blog-item__date">
                                    <h4 class="blog-item__date-time">{{ $blog->created_at->format('d') }} {{ $blog->created_at->format('M') }}</h4>
                                    {{-- <span class="blog-item__date-month"></span> --}}
                                </div>
                            </div>
                            <div class="blog-item__content">
                                <ul class="blog-item__list">
                                    <li class="blog-item__list-item">Post by: {{ $blog->name }}</li>
                                </ul>
                                <h3 class="blog-item__title">{{ $blog->heading }}</h3>
                                <p class="blog-item__desc">{{ $blog->description }}</p>
                                <div class="row pt-2 pb-4">
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="row gy-4">
                    <div class="col-lg-12">
                        <div class="blog-sidebar">
                            <h4 class="blog-sidebar__title">Categories</h4>
                            <ul class="text-list style-category">
                                <li class="text-list__item"><a href="blog.html" class="text-list__link"> <span class="text-list__link-icon"><i class="las la-caret-right"></i></span> Car Loan</a></li>
                                <li class="text-list__item"><a href="blog.html" class="text-list__link"> <span class="text-list__link-icon"><i class="las la-caret-right"></i></span> Home Loan</a></li>
                                <li class="text-list__item"><a href="blog.html" class="text-list__link"> <span class="text-list__link-icon"><i class="las la-caret-right"></i></span> Personal Loan</a></li>
                                <li class="text-list__item"><a href="blog.html" class="text-list__link"> <span class="text-list__link-icon"><i class="las la-caret-right"></i></span> Mudra Loan</a></li>
                                <li class="text-list__item"><a href="blog.html" class="text-list__link"> <span class="text-list__link-icon"><i class="las la-caret-right"></i></span> MSME Loan</a></li>
                                <li class="text-list__item"><a href="blog.html" class="text-list__link"> <span class="text-list__link-icon"><i class="las la-caret-right"></i></span> Vehicle Loan</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="blog-sidebar">
                            <h4 class="blog-sidebar__title">Latest Blog</h4>
                            <div class="row gy-4">
                                @foreach ($latestBlogs as $latestBlog)
                                <div class="col-md-12">
                                    <div class="latest-blog">
                                        <div class="latest-blog__thumb">
                                            <a href="{{ route('blog.details', $latestBlog->id) }}">
                                                <img src="{{ asset('assets/img/blog-1.jpg') }}" style="height: 50px" alt="{{ $latestBlog->heading }}">
                                            </a>
                                        </div>
                                        <div class="latest-blog__content">
                                            <h6 class="latest-blog__title">
                                                <a href="{{ route('blog.details', $latestBlog->id) }}">{{ $latestBlog->heading }}</a>
                                            </h6>
                                            <span class="latest-blog__date">{{ $latestBlog->created_at->format('M d, Y') }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Blog End Here ==================== -->
@endsection
