  <!-- Footer Start -->
  <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <div class="footer-item">
                       <img src="{{ asset('assets/img/logo.png') }}" style="height: 200px ; width: auto;" alt="Logo">
                        <p class="mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Explore Links</h4>
                    <a href="/"><i class="fas fa-angle-right me-2"></i> Home</a>
                    <a href="{{route('services')}}"><i class="fas fa-angle-right me-2"></i> Services</a>
                    <a href="{{route('about')}}"><i class="fas fa-angle-right me-2"></i> About Us</a>
                    <a href="{{route('faq')}}"><i class="fas fa-angle-right me-2"></i> faq</a>
                    <a href="{{route('blogs')}}"><i class="fas fa-angle-right me-2"></i> Blogs</a>
                    <a href="{{route('contact')}}"><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Contact Info</h4>
                    <a href="#"><i class="fa fa-map-marker-alt me-2"></i> 123 Street, New York, USA</a>
                    <a href="#"><i class="fas fa-envelope me-2"></i> info@example.com</a>
                    <a href="#"><i class="fas fa-envelope me-2"></i> info@example.com</a>
                    <a href="#"><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                    <a href="#" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                    <div class="d-flex align-items-center">
                        <a class="btn btn-light btn-md-square me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-md-square me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-light btn-md-square me-2" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-light btn-md-square me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Explore Links</h4>
                    {{-- <a href="/"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a> --}}
                    <a href="{{route('privacy.policy')}}"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                    <a href="{{route('terms')}}"><i class="fas fa-angle-right me-2"></i> Term and Condition</a>
                    <a href="{{route('about')}}"><i class="fas fa-angle-right me-2"></i> About Us</a>
                    <a href="{{route('faq')}}"><i class="fas fa-angle-right me-2"></i> faq</a>
                    <a href="{{route('contact')}}"><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            {{-- <div class="col-md-6 text-center text-md-start mb-md-0">
                <span class="text-body"><a href="#" class="border-bottom text-primary"><i class="fas fa-copyright text-light me-2"></i>Tatkaal Loan</a>, All right reserved.</span>
            </div> --}}
            <div class="col-md-6 text-center text-md-end text-body">
                <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                {{-- Designed By <a class="border-bottom text-primary" href="#">HTML Codex</a> Distributed By <a class="border-bottom text-primary" href="https://themewagon.com/">ThemeWagon</a> --}}
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->



<a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   



<script src="../../ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="../../cdn.jsdelivr.net/npm/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/lib/wow/wow.min.js')}}"></script>
<script src="{{ asset('assets/lib/easing/easing.min.js')}}"></script>
<script src="{{ asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{ asset('assets/lib/counterup/counterup.min.js')}}"></script>
<script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('assets/js/main.js')}}"></script>
<script>
document.getElementById('loanApplicationForm').addEventListener('submit', function (event) {
    event.preventDefault();
    
    // Collect form data
    const formData = new FormData(this);
    formData.append('_token', '{{ csrf_token() }}');  // Append CSRF token

    fetch('/loan-applications', {
        method: 'POST',
        body: formData,
        headers: {
            'Accept': 'application/json',  // Expect JSON response
        },
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            // Close the modal
            let modal = bootstrap.Modal.getInstance(document.getElementById('tatkalLoanModal'));
            modal.hide();

            // Reset the form
            this.reset();

            // Show SweetAlert success message
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'Your form has been submitted successfully. We will contact you soon after verification.',
                confirmButtonText: 'OK'
            });
        } else {
            // Handle failure
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong. Please try again.',
                confirmButtonText: 'OK'
            });
        }
    })
    .catch(error => {
        console.error('Error:', error);
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'An error occurred while submitting your form. Please try again.',
            confirmButtonText: 'OK'
        });
    });
});
</script>

</body>

</html>