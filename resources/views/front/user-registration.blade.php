@extends('layouts/front_layouts')

@section('content')
    <!-- ==================== Breadcumb Start Here ==================== -->
    <section class="breadcumb section-bg py-120">
        <div class="work-shape d-flex justify-content-center">
            <ul class="work-shape__list">
                <li class="work-shape__item"><img src="assets/images/home-01/shape-circle.png" alt=""></li>
                <li class="work-shape__item"><img src="assets/images/home-01/shape-square.png" alt=""></li>
                <li class="work-shape__item"><img src="assets/images/home-01/shape-triangle.png" alt=""></li>

                <li class="work-shape__item"><img src="assets/images/home-01/shape-circle.png" alt=""></li>
                <li class="work-shape__item"><img src="assets/images/home-01/shape-square.png" alt=""></li>
                <li class="work-shape__item"><img src="assets/images/home-01/shape-triangle.png" alt=""></li>
            </ul>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcumb__wrapper">
                        <h3 class="breadcumb__title">Create New Account</h3>
                        <ul class="breadcumb__list">
                            <li class="breadcumb__item"><a href="/" class="breadcumb__link"> <i
                                        class="las la-home"></i> Home</a> </li>
                            <li class="breadcumb__item"> //</li>
                            <li class="breadcumb__item"> <span class="breadcumb__item-text">Sign Up</span> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== Breadcumb End Here ==================== -->

    <!-- ==================== Sign Up Start Here ==================== -->
    <section class="account py-120">
        <div class="container">
            <div class="account-inner">
                <div class="account-inner__circle">
                    <img src="assets/images/home-02/testimonial-circle.png" alt="">
                </div>
                <div class="row align-content-center gy-5 flex-wrap-reverse">
                    <div class="col-lg-6 pe-lg-5">
                        <div class="account-thumb">
                            <img src="assets/images/home-01/account-img.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="account-wrapper">
                            <form action="{{ route('register') }}" method="POST" autocomplete="off">
                                @csrf
                                <div class="account-content">
                                    <div class="account-content__top">
                                        <h4 class="account-content__title">Welcome to Call<span class="account-content__title-colored">zen</span></h4>
                                        <p class="account-content__desc">Sign Up With Social Media</p>
                                        <ul class="social-list mt-4 mb-3 justify-content-center">
                                            <li class="social-list__item"><a href="#" class="social-list__link"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="social-list__item"><a href="#" class="social-list__link active"><i class="fab fa-twitter"></i></a></li>
                                            <li class="social-list__item"><a href="#" class="social-list__link"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="social-list__item"><a href="#" class="social-list__link"><i class="fab fa-pinterest"></i></a></li>
                                        </ul>
                                        <span class="account-content__or">Or</span>
                                    </div>
                                </div>
                                <div class="row gy-4">
                                    <div class="col-sm-12">
                                        <label for="name" class="form--label">Username</label>
                                        <div class="input--group">
                                            <input type="text" id="name" name="name" class="form--control form-control style-two" placeholder="Username">
                                            <span class="input--icon"><i class="fas fa-user"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="email" class="form--label">Email</label>
                                        <div class="input--group">
                                            <input type="email" id="email" name="email" class="form--control form-control style-two" placeholder="Email">
                                            <span class="input--icon"><i class="fas fa-envelope"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="password" class="form--label">Password</label>
                                        <div class="input--group">
                                            <input type="password" id="password" name="password" class="form--control form-control style-two" placeholder="Password">
                                            <span class="input--icon"><i class="fas fa-lock"></i></span>
                                            <div class="password-show-hide fas fa-eye toggle-password" onclick="togglePassword('password')"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="password_confirmation" class="form--label">Confirm Password</label>
                                        <div class="input--group">
                                            <input type="password" id="password_confirmation" name="password_confirmation" class="form--control form-control style-two" placeholder="Confirm Password">
                                            <span class="input--icon"><i class="fas fa-lock"></i></span>
                                            <div class="password-show-hide fas fa-eye toggle-password" onclick="togglePassword('password_confirmation')"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="custom--checkbox">
                                            <input type="checkbox" id="rem-me" class="custom--checkbox__check">
                                            <label for="rem-me" class="custom--checkbox__text"> I agree with Licenses Info, <a href="#" class="custom--checkbox__text-highlited">Terms of Service</a>, Privacy Policy</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="button-wrapper w-100">
                                            <button type="submit" class="btn--base w-100">Create Account</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-lg-5 mt-4">
                                        <div class="another-account d-flex justify-content-center">
                                            <p class="another-account__desc">Already have an account? <a href="{{ route('login') }}" class="another-account__link">Sign In</a></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== Sign Up End Here ==================== -->
    <script>
        function togglePassword(id) {
            var x = document.getElementById(id);
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
@endsection
