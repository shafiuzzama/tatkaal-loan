@extends('layouts.admin_layouts.admin_layout')
@section('head-tag')
<title>Tatkal Loan || Contact Details</title>
@endsection
@section('content')
      
        
<div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Product Details</h4>
                        <h6>Full details of a product</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="productdetails">
                                    <ul class="product-bar">
                                        <li>
                                            <h4>Name</h4>
                                            <h6>{{$contact->name}}</h6>
                                        </li>
                                        <li>
                                            <h4>Email</h4>
                                            <h6>{{$contact->email}}</h6>
                                        </li>
                                        <li>
                                            <h4>Phone</h4>
                                            <h6>{{$contact->phone}}</h6>
                                        </li>
                                        <li>
                                            <h4>Subject</h4>
                                            <h6>{{$contact->subject}}</h6>
                                        </li>
                                        <li>
                                            <h4>Message</h4>
                                            <h6>{{$contact->message}}</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>

            </div>        
        
        
        
        
        
        
  @endsection