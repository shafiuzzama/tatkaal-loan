@extends('layouts/front_layouts')

@section('content')
   <!-- Contact Start -->
   <div class="container-fluid contact bg-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="contact-item">
                    <div class="pb-5">
                        <h4 class="text-primary">Contact Us</h4>
                        <h1 class="display-4 mb-4">Get In Touch With Us</h1>
                        <p class="mb-0">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-primary fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary btn-lg-square rounded-circle p-4"><i class="fa fa-home text-white"></i></div>
                        <div class="ms-4">
                            <h4>Addresses</h4>
                            <p class="mb-0">123 ranking Street, New York, USA</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary btn-lg-square rounded-circle p-2"><i class="fa fa-phone-alt text-white"></i></div>
                        <div class="ms-4">
                            <h4>Mobile</h4>
                            <p class="mb-0">+012 345 67890</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-primary btn-lg-square rounded-circle p-2"><i class="fa fa-envelope-open text-white"></i></div>
                        <div class="ms-4">
                            <h4>Email</h4>
                            <p class="mb-0">info@example.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <form action="{{ route('form.submit') }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="row g-3">
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="phone" class="form-control" name="phone" placeholder="Phone">
                                <label for="phone">Your Phone</label>
                            </div>
                        </div>
                        <div class="col-lg-12 ">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" name="message" style="height: 160px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="rounded h-100">
                    <iframe class="rounded-top w-100" 
                    style="height: 500px; margin-bottom: -6px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd" 
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-bottom p-4">
                        <div class="d-flex">
                            <a class="btn btn-dark btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-lg-square rounded-circle mx-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-lg-square rounded-circle mx-2" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-lg-square rounded-circle mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            @if(session('success'))
                Swal.fire({
                    title: 'Success!',
                    text: "{{ session('success') }}",
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.reload();
                    }
                });
            @endif
        });
    </script>
@endsection
