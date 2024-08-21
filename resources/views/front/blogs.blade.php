@extends('layouts/front_layouts')

@section('content')

  <!-- Blog Start -->
  <div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h4 class="text-primary">Our Blogs</h4>
            <h1 class="display-4">Latest Articles & News from the Blogs</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($blogs as $blog)
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.{{ $loop->index * 2 + 1 }}s">
                    <div class="blog-item bg-light rounded p-4" style="background-image: url({{ asset('assets/img/bg.png') }});">
                        <div class="mb-4">
                            <h4 class="text-primary mb-2">{{ $blog->category }}</h4>
                            <div class="d-flex justify-content-between">
                                <p class="mb-0"><span class="text-dark fw-bold">On</span> {{ $blog->created_at->format('M d, Y') }}</p>
                                <p class="mb-0"><span class="text-dark fw-bold">By</span>{{ $blog->name }}</p>
                            </div>
                        </div>
                        <div class="project-img">
                            <img src="{{ asset('assets/img/blog-1.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                            <div class="blog-plus-icon">
                                <a href="{{ asset('assets/img/blog-1.jpg')}}" data-lightbox="blog-{{ $loop->index }}" class="btn btn-primary btn-md-square rounded-pill"><i class="fas fa-plus fa-1x"></i></a>
                            </div>
                        </div>
                        <div class="my-4">
                            <h4 class="blog-item__title"><a href="{{ route('blog.details', $blog->id) }}">{{ $blog->heading }}</a></h4>
                            <a href="{{ route('blog.details', $blog->id) }}" class="h4">{{ $blog->title }}</a>
                        </div>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('blog.details', $blog->id) }}">Explore More</a>
                    </div>
                </div>
            @endforeach
        </div>
        
        <!-- Pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                {{ $blogs->links('pagination::bootstrap-4') }}
            </ul>
        </nav>
        
    </div>
</div>
<!-- Blog End -->

@endsection
