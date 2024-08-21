<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Loan - Tatkaal Loan || Personal Loan || Mudra Loan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&amp;family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <div class="container-fluid topbar px-0 d-none d-lg-block">
            <div class="container px-0">
                <div class="row gx-0 align-items-center" style="height: 45px;">
                    <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <a href="#" class="text-white me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                            <a href="#" class="text-white me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                            <a href="#" class="text-white me-0"><i class="fas fa-envelope text-primary me-2"></i>Example@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i class="fab fa-facebook-f text-white"></i></a>
                            <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i class="fab fa-twitter text-white"></i></a>
                            <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i class="fab fa-instagram text-white"></i></a>
                            <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid sticky-top px-0">
            <div class="position-absolute bg-dark" style="left: 0; top: 0; width: 100%; height: 100%;">
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 px-4">
                    <a href="/" class="navbar-brand p-0">
                        <h1 class="text-info mb-0 d-flex align-items-center">
                            <img src="{{ asset('assets/img/logo.png') }}" style="height:100px; width:auto;" alt="Logo">
                            Tatkaal Loan
                        </h1>  
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0">
                            <a href="/" class="nav-item nav-link active">Home</a>
                            <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                            <a href="{{route('services')}}" class="nav-item nav-link">Services</a>
                            <a href="{{route('blogs')}}" class="nav-item nav-link">Our Blog</a>
                            <a href="{{route('faq')}}" class="nav-item nav-link">Faqs</a>
                            {{-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0">
                                    <a href="{{route('blogs')}}" class="dropdown-item">Our Blog</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    <a href="faqs.html" class="dropdown-item">FAQs</a>
                                    <a href="404.html" class="dropdown-item">404 Page</a>
                                </div>
                            </div> --}}
                            <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                          
                            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 ms-2 flex-wrap flex-sm-shrink-0" data-bs-toggle="modal" data-bs-target="#tatkalLoanModal">Apply Now Tatkaal Loan</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        
        <!-- Modal Structure -->
<div class="modal fade" id="tatkalLoanModal" tabindex="-1" aria-labelledby="tatkalLoanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tatkalLoanModalLabel">Apply for Tatkaal Loan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="loanApplicationForm">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="loan_amount" class="form-label">Loan Amount</label>
                        <input type="number" class="form-control" id="loan_amount" name="loan_amount" required>
                    </div>
                    <div class="mb-3">
                        <label for="loan_category" class="form-label">Loan Category</label>
                        <select class="form-select" id="loan_category" name="loan_category" required>
                            <option value="">Select a category</option>
                            <option value="car_loan">Car Loan</option>
                            <option value="bike_loan">Bike Loan</option>
                            <option value="home_loan">Home Loan</option>
                            <option value="mudra_loan">Mudra Loan</option>
                            <option value="vehicle_loan">Vehicle Loan</option>
                            <option value="personal_loan">Personal Loan</option>
                            <option value="credit_loan">Credit Loan</option>
                            <option value="msme_loan">MSME Loan</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="loan_description" class="form-label">Loan Description (Optional)</label>
                        <textarea class="form-control" id="loan_description" name="loan_description" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Application</button>
                </form>
            </div>
        </div>
    </div>
</div>