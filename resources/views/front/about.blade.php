@extends('layouts/front_layouts')

@section('content')
<!-- About Start -->
<div class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="about-img">
                    <img src="{{ asset('assets/img/about-3.png')}}" class="img-fluid w-100 rounded-top bg-white" alt="Image">
                    <img src="{{ asset('assets/img/about-2.jpg')}}" class="img-fluid w-100 rounded-bottom" alt="Image">
                </div>
            </div>
            <div class="col-lg-6 col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                <h4 class="text-primary">About Us</h4>
                <h1 class="display-5 mb-4">Your Trusted Partner for Immediate Financial Relief and Stress-Free Borrowing.</h1>
                <p class="text ps-4 mb-4">Financial stability is essential for peace of mind, but life is unpredictable, and unexpected expenses can disrupt even the best-laid plans. In such situations, having a reliable financial partner is crucial. Tatkaal Loan is that partner, offering you immediate access to funds with a focus on ease, speed, and affordability. Our Tatkaal Loan service is specifically designed to provide quick financial relief, ensuring that you never have to face a financial crisis alone.
                </p>
                <p class="text ps-4 mb-4">The key feature of Tatkaal Loan is its instant approval process. We understand that when financial emergencies strike, waiting for days or weeks for loan approval is not an option. That’s why we’ve developed a system that allows for approval within just 10 minutes. Whether you’re dealing with a medical emergency, urgent travel plans, or any other unforeseen expense, Tatkaal Loan ensures that you have the funds you need, when you need them.</p>
                    <p class="text ps-4 mb-4">
                    Affordability is another cornerstone of our service. We offer low-interest rates to make borrowing more manageable. Our goal is to provide you with a financial solution that helps you in the short term without creating long-term financial burdens. With flexible repayment plans, Tatkaal Loan is tailored to fit your financial situation, allowing you to repay at a pace that suits you.
                    </p>
                    <p class="text ps-4 mb-4">
                    Tatkaal Loan is also built on a foundation of trust and transparency. We believe in clear communication and straightforward terms, so you always know what to expect. Our dedicated customer service team is available to guide you through every step of the process, from application to repayment. We are here to answer your questions, address your concerns, and provide you with the support you need to make the best financial decisions.</p>
                    <p class="text ps-4 mb-4">
                    In a world where financial uncertainty is common, Tatkaal Loan provides a sense of security. We are committed to being your trusted partner, offering you the financial support you need with the convenience and care you deserve. With Tatkaal Loan, you can handle life’s financial surprises with confidence, knowing that help is just a few clicks away.    
                </p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<div class="container my-5">
    <h2 class="text-center mb-4">Our Mission & Vision</h2>
    
    <ul class="nav nav-tabs justify-content-center" id="missionVisionTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="mission-tab" data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab" aria-controls="mission" aria-selected="true">Mission</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button" role="tab" aria-controls="vision" aria-selected="false">Vision</button>
        </li>
    </ul>

    <div class="tab-content mt-4" id="missionVisionTabContent">
        <!-- Mission Tab -->
        <div class="tab-pane fade show active" id="mission" role="tabpanel" aria-labelledby="mission-tab">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/Asset-1.webp')}}" class="img-fluid rounded" alt="Our Mission">

                </div>
                <div class="col-md-6">
                    <h3>Our Mission</h3>
                    <p>Our mission is to deliver tailored financial solutions that are not only accessible but also reliable and efficient, making a positive impact on the lives of our clients.</p>
                    <p>Our mission is to empower individuals and businesses by providing quick, reliable, and affordable financial solutions tailored to their unique circumstances. With a strong commitment to customer satisfaction, we strive to make financial access easy and stress-free, ensuring that our clients can achieve their goals with confidence.</p>
                    <p>We offer a wide array of financial services designed to meet the diverse needs of our clients. From personal loans and vehicle financing to business loans and emergency funds, our solutions are tailored to provide quick and effective financial relief. Our services are designed with flexibility in mind, ensuring that we can cater to both short-term and long-term financial requirements.</p>
                </div>
            </div>
        </div>

        <!-- Vision Tab -->
        <div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="vision-tab">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/vission.jpg')}}" class="img-fluid rounded" alt="Our Vision">
                </div>
                <div class="col-md-6">
                    <h3>Our Vision</h3>
                    <p>Our vision is to be the leading provider of financial services, recognized for our commitment to excellence and customer-centric approach.</p>
                    <p> We believe that everyone deserves access to financial resources, whether for personal needs, business growth, or unexpected emergencies. </p>
                    <p> At the core of our operations is a dedication to customer satisfaction. We understand that financial needs vary, and we offer a wide range of services to cater to these needs. Our team of experienced professionals is always ready to provide personalized assistance, ensuring that our clients receive the best possible service. Whether you’re looking for a quick loan or long-term financial planning, we are here to support you every step of the way.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
