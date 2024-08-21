<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="Tatkal Loan">
<meta name="keywords" content="admin, Tatkal Loan, bootstrap, business, Fantasy, creative, management, modern, html5, responsive">
<meta name="author" content="Tatkal Loan - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
@yield('head-tag')



<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/logo.png')}}">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> 
<link rel="stylesheet" href="{{asset('assets/plugins/toastr/toatr.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/owlcarousel/owl.carousel.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://printjs-4de6.kxcdn.com/print.min.css" rel="stylesheet"> 


</head>
<style>
    .error{
        color:red;
    }
</style>


@include('layouts.admin_layouts.admin_header')
@include('layouts.admin_layouts.admin_sidebar')

<div class="page-wrapper">
    @yield('content')
    
</div>
</div>


<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

<script src="{{asset('assets/js/feather.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/plugins/apexchart/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/plugins/apexchart/chart-data.js')}}"></script>

<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/quotation.js')}}"></script>
<script src="{{asset('assets/js/sale_return.js')}}"></script>
<script src="{{asset('assets/plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('assets/plugins/toastr/toastr.js')}}"></script>
<script src="{{asset('assets/plugins/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtJq7UJG9AMRJpzaMEHKe1CISPWUsh0R0&callback=initAutocomplete&libraries=places&v=weekly" defer></script>
