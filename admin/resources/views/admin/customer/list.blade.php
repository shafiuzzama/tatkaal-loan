@extends('layouts.admin_layouts.admin_layout')
@section('head-tag')
<title>Tatkal Loan|| FAQ</title>
<style>
    .wrap-text {
        white-space: normal !important;
        word-wrap: break-word !important;
    }
</style>
@endsection
@section('content')
<div class="content">
   <div class="page-header">
      <div class="page-title">
         <h4>FAQ List</h4>
         <h6>Manage your FAQ</h6>
      </div>
      <div class="page-btn">
         <a href="{{route('general_setting')}}" class="btn btn-added"><img src="{{asset('assets/img/icons/plus.svg')}}" class="me-2" alt="img">Add FAQ</a>
      </div>
   </div>
   @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

   <div class="card">
      <div class="card-body">
         <div class="table-top">
            <div class="search-set">
               <div class="search-path">
                  <a class="btn btn-filter" id="filter_search">
                     <img src="{{asset('assets/img/icons/filter.svg')}}" alt="img">
                     <span><img src="{{asset('assets/img/icons/closes.svg')}}" alt="img"></span>
                  </a>
               </div>
               <div class="search-input">
                  <a class="btn btn-searchset"><img src="{{asset('assets/img/icons/search-white.svg')}}" alt="img"></a>
               </div>
            </div>
            <div class="wordset">
               <ul>
                  <li>
                     <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{asset('assets/img/icons/pdf.svg')}}" alt="img"></a>
                  </li>
                  <li>
                     <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{asset('assets/img/icons/excel.svg')}}" alt="img"></a>
                  </li>
                  <li>
                     <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{asset('assets/img/icons/printer.svg')}}" alt="img"></a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="card" id="filter_inputs">
            <div class="card-body pb-0">
               <div class="row">
                  <div class="col-lg-3 col-sm-6 col-12">
                     <div class="form-group">
                        <input type="text" placeholder="Enter Brand Name">
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-12">
                     <div class="form-group">
                        <input type="text" placeholder="Enter Brand Description">
                     </div>
                  </div>
                  <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                     <div class="form-group">
                        <a class="btn btn-filters ms-auto"><img src="{{asset('assets/img/icons/search-whites.svg')}}" alt="img"></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="table-responsive">
            @if($customers->isEmpty())
            <p>No customer details found.</p>
        @else
            <table class="table datanew">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Loan Amount</th>
                        <th>Loan Category</th>
                        <th>Address</th>
                        <th>Loan Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->loan_amount }}</td>
                        <td>{{ $customer->loan_category }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->loan_description }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
         </div>
      </div>
   </div>
</div>
@endsection
