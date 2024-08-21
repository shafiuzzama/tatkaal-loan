@extends('layouts/front_layouts')

@section('content')
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <div class="header-carousel-item-img-1">
                <img src="{{ asset('assets/img/carousel-1.jpg') }}" class="img-fluid w-100" alt="Image">
            </div>
            <div class="carousel-caption">
                <div class="carousel-caption-inner text-start p-3">
                    <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated" data-animation="fadeInUp"
                        data-delay="1.3s" style="animation-delay: 1.3s;">Get Instant Approval in 10 Minutes with Tatkaal
                        Loan’s Low Rates</h1>
                    <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s"
                        style="animation-delay: 1.5s;">Don’t wait for days to get the funds you need. Tatkaal Loan offers
                        instant approval in just 10 minutes, coupled with low interest rates, so you can handle emergencies
                        with ease and affordability.
                    </p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mb-4 me-4 fadeInUp animate__animated"
                        data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" data-bs-toggle="modal"
                        data-bs-target="#tatkalLoanModal">Apply Now Tatkaal Loan</a>

                </div>
            </div>
        </div>
        <div class="header-carousel-item mx-auto">
            <div class="header-carousel-item-img-2">
                <img src="{{ asset('assets/img/carousel-2.jpg') }}" class="img-fluid w-100" alt="Image">
            </div>
            <div class="carousel-caption">
                <div class="carousel-caption-inner text-center p-3">
                    <h1 class="display-1 text-capitalize text-white mb-4">Tatkaal Loan: Your Reliable Solution for Urgent
                        Financial Needs, Instantly</h1>
                    <p class="mb-5 fs-5">When time is of the essence, trust Tatkaal Loan for immediate financial assistance.
                        Whether it’s unexpected expenses or urgent needs, our reliable service delivers quick solutions to
                        help you stay on track.
                    </p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mb-4 me-4" data-bs-toggle="modal"
                        data-bs-target="#tatkalLoanModal">Apply Now Tatkaal Loan</a>

                </div>
            </div>
        </div>
        <div class="header-carousel-item">
            <div class="header-carousel-item-img-3">
                <img src="{{ asset('assets/img/carousel-3.jpg') }}" class="img-fluid w-100" alt="Image">
            </div>
            <div class="carousel-caption">
                <div class="carousel-caption-inner text-end p-3">
                    <h1 class="display-1 text-capitalize text-white mb-4">Secure Quick Funds with Tatkaal Loan: Fast, Easy,
                        and Affordable</h1>
                    <p class="mb-5 fs-5">Experience swift approval and access to funds with Tatkaal Loan. Our seamless
                        process ensures you get the financial support you need, without hassle, at competitive rates. Apply
                        today and secure your future.
                    </p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mb-4 me-4" data-bs-toggle="modal"
                        data-bs-target="#tatkalLoanModal">Apply Now Tatkaal Loan</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img src="{{ asset('assets/img/about111.png') }}" class="img-fluid w-100 rounded-top bg-white"
                            alt="Image">
                        {{-- <img src="{{ asset('assets/img/business-loan.png') }}" class="img-fluid w-100 rounded-bottom" alt="Image"> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h2 class="text-primary">Tatkaal Loan</h2>
                    <h1 class="display-5 mb-4">Fast-Track Your Financial Needs with Instant Approval and Low-Interest Rates.
                    </h1>
                    <p class="text ps-4 mb-4">In today’s fast-paced world, financial emergencies can arise at any moment.
                        Whether it’s an unexpected medical expense, a sudden need for home repairs, or an urgent business
                        requirement, having access to quick funds is crucial. This is where Tatkaal Loan steps in, providing
                        a lifeline to individuals who need immediate financial assistance. Our Tatkaal Loan service is
                        designed to offer instant approval and disbursement, ensuring that you get the funds you need within
                        just 10 minutes.

                        At the core of Tatkaal Loan is a commitment to speed and efficiency. We understand that when you’re
                        facing a financial emergency, every minute counts. That’s why we’ve streamlined our application
                        process to be as simple and quick as possible.
                    </p>
                    <div class="row g-4 justify-content-between mb-5">
                        <div class="col-xl-5"><a href="{{ route('about') }}"
                                class="btn btn-primary rounded-pill py-3 px-5">Know More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h4 class="text-primary">Our Services</h4>
                <h1 class="display-4"> Offering the Best Tatkaal Loan Services</h1>
            </div>
            <div class="row g-4 justify-content-center text-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/service-1.jpg') }}" class="img-fluid w-100 rounded-top"
                                alt="">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="service-content-inner">
                                <a href="#" class="h4 mb-4 d-inline-flex text-start"><i
                                        class="fas fa-donate fa-2x me-2"></i>Empowering Small Businesses</a>
                                <p class="mb-4">Mudra Loans support micro and small enterprises by offering financial
                                    assistance for business needs. For urgent capital, Tatkaal Loan provides quick funds
                                    with instant approval in 10 minutes.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/service-2.jpg') }}" class="img-fluid w-100 rounded-top"
                                alt="">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="service-content-inner">
                                <a href="#" class="h4 mb-4 d-inline-flex text-start"><i
                                        class="fas fa-donate fa-2x me-2"></i> Achieve Your Dream Home</a>
                                <p class="mb-4">Home Loans offer large amounts with low-interest rates for purchasing
                                    property. If you need fast down payment assistance, Tatkaal Loan delivers quick funds
                                    with hassle-free approval.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/service-4.jpg') }}" class="img-fluid w-100 rounded-top"
                                alt="">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="service-content-inner">
                                <a href="#" class="h4 mb-4 d-inline-flex text-start"><i
                                        class="fas fa-donate fa-2x me-2"></i> Versatile Financial Support</a>
                                <p class="mb-4">Personal Loans provide flexible funding for various needs. For
                                    emergencies, Tatkaal Loan offers instant approval and quick disbursement, ensuring you
                                    get funds when you need them most.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item bg-light rounded">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/service-3.jpg') }}" class="img-fluid w-100 rounded-top"
                                alt="">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="service-content-inner">
                                <a href="#" class="h4 mb-4 d-inline-flex text-start"><i
                                        class="fas fa-donate fa-2x me-2"></i> Get Your Dream Two-Wheeler</a>
                                <p class="mb-4">Bike Loans finance your motorcycle or scooter purchase with easy terms.
                                    When time is crucial, Tatkaal Loan ensures rapid fund access within 10 minutes, helping
                                    you ride sooner.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <a class="btn btn-primary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s"
                        href="{{ route('services') }}">Services More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Project Start -->
    <div class="container-fluid project">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h4 class="text-primary">Our Business </h4>
                <h1 class="display-4">Explore Our Tatkaal Loan</h1>
            </div>
            <div class="project-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item h-100 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="project-img">
                        <img src="{{ asset('assets/img/projects-1.jpg') }}" class="img-fluid w-100 rounded"
                            alt="Image">
                    </div>
                    <div class="project-content bg-light rounded p-4">
                        <div class="project-content-inner">
                            <div class="project-icon mb-3"><i class="fas fa-chart-line fa-4x text-primary"></i></div>
                            <p class="text-dark fs-5 mb-3">Business Growth</p>
                            <a href="#" class="h4">Accelerate business growth by identifying new market opportunities and optimizing operational efficiencies. Invest in innovation and strategic partnerships to expand your reach and enhance profitability.</a>
                            {{-- <div class="pt-4">
                                <a class="btn btn-light rounded-pill py-3 px-5" href="#">Read More</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="project-item h-100 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="project-img">
                        <img src="{{ asset('assets/img/projects-1.jpg') }}" class="img-fluid w-100 rounded"
                            alt="Image">
                    </div>
                    <div class="project-content bg-light rounded p-4">
                        <div class="project-content-inner">
                            <div class="project-icon mb-3"><i class="fas fa-signal fa-4x text-primary"></i></div>
                            <p class="text-dark fs-5 mb-3">Marketing Strategy</p>
                            <a href="#" class="h4">
                                Develop a customer-centric approach that leverages digital channels and data-driven insights to engage your audience, build brand loyalty, and drive conversions. Focus on creating value through personalized experiences and targeted campaigns.</a>
                            {{-- <div class="pt-4">
                                <a class="btn btn-light rounded-pill py-3 px-5" href="#">Read More</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="project-item h-100">
                    <div class="project-img">
                        <img src="{{ asset('assets/img/projects-1.jpg') }}" class="img-fluid w-100 rounded"
                            alt="Image">
                    </div>
                    <div class="project-content bg-light rounded p-4">
                        <div class="project-content-inner">
                            <div class="project-icon mb-3"><i class="fas fa-signal fa-4x text-primary"></i></div>
                            <p class="text-dark fs-5 mb-3">Marketing Strategy</p>
                            <a href="#" class="h4">
                                Develop a customer-centric approach that leverages digital channels and data-driven insights to engage your audience, build brand loyalty, and drive conversions. Focus on creating value through personalized experiences and targeted campaigns.</a>
                            {{-- <div class="pt-4">
                                <a class="btn btn-light rounded-pill py-3 px-5" href="#">Read More</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h4 class="text-primary">Our Blogs</h4>
                <h1 class="display-4">Latest Articles & News from the Blogs</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($blogs as $blog)
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.{{ $loop->index * 2 + 1 }}s">
                        <div class="blog-item bg-light rounded p-4"
                            style="background-image: url({{ asset('assets/img/bg.png') }});">
                            <div class="mb-4">
                                <h4 class="text-primary mb-2">{{ $blog->category }}</h4>
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0"><span class="text-dark fw-bold">On</span>
                                        {{ $blog->created_at->format('M d, Y') }}</p>
                                    <p class="mb-0"><span class="text-dark fw-bold">By</span>{{ $blog->name }}</p>
                                </div>
                            </div>
                            <div class="project-img">
                                <img src="{{ asset('assets/img/blog-1.jpg') }}" class="img-fluid w-100 rounded"
                                    alt="Image">
                                <div class="blog-plus-icon">
                                    <a href="{{ asset('assets/img/blog-1.jpg') }}"
                                        data-lightbox="blog-{{ $loop->index }}"
                                        class="btn btn-primary btn-md-square rounded-pill"><i
                                            class="fas fa-plus fa-1x"></i></a>
                                </div>
                            </div>
                            <div class="my-4">
                                <h4 class="blog-item__title"><a
                                        href="{{ route('blog.details', $blog->id) }}">{{ $blog->heading }}</a></h4>
                                <a href="{{ route('blog.details', $blog->id) }}" class="h4">{{ $blog->title }}</a>
                            </div>
                            <a class="btn btn-primary rounded-pill py-2 px-4"
                                href="{{ route('blog.details', $blog->id) }}">Explore More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Testimonial Start -->
    <div class="container-fluid testimonial bg-light py-5">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="h-100 rounded">
                        <h4 class="text-primary">Our Feedbacks </h4>
                        <h1 class="display-4 mb-4">Clients are Talking</h1>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum atque soluta unde
                            itaque. Consequatur quam odit blanditiis harum veritatis porro.</p>
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Read All Reviews <i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="testimonial-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                        @foreach ($testimonials as $testimonial)
                            <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="d-flex">
                                    <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                                    <p class="mt-4">{{ $testimonial->review }}</p>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <div class="my-auto text-end">
                                        <h5>{{ $testimonial->name }}</h5>
                                        <p class="mb-0">{{ $testimonial->designation }}</p>
                                    </div>
                                    <div class="bg-white rounded-circle ms-3">
                                        <img src="{{ asset($testimonial->image) }}" class="rounded-circle p-2"
                                            style="width: 80px; height: 80px; border: 1px solid; border-color: var(--bs-primary);"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- FAQ Start -->
    <div class="container-fluid faq py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="pb-5">
                        <h4 class="text-primary">FAQs</h4>
                        <h1 class="display-4">Get the Answers to Tatkaal Loan FAQs</h1>
                    </div>
                    <div class="accordion bg-light rounded p-4" id="accordionExample">
                        @foreach ($faqs as $index => $faq)
                            <div class="accordion-item border-0 mb-4">
                                <h2 class="accordion-header" id="heading{{ $index }}">
                                    <button
                                        class="accordion-button text-dark fs-5 fw-bold rounded-top {{ $index == 0 ? '' : 'collapsed' }}"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $index }}"
                                        aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                        aria-controls="collapse{{ $index }}">
                                        {{ $faq->questions }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $index }}"
                                    class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                    aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body my-2">
                                        <h5>Dolor sit amet consectetur adipisicing elit.</h5>
                                        <p>{{ strip_tags($faq->answers) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="faq-img RotateMoveRight rounded">
                        <img src="{{ asset('assets/img/faq-img.jpg') }}" class="img-fluid rounded w-100" alt="Image">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ End -->
@endsection
