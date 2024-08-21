@extends('layouts.admin_layouts.admin_layout')
@section('head-tag')
<title>Tatkal Loan || Contact List</title>
@endsection
@section('content')
<div class="content">
   <div class="page-header">
      <div class="page-title">
         <h4>Contact List</h4>
         <h6>Manage your Contact</h6>
      </div>
      {{-- <div class="page-btn">
         <a href="#" class="btn btn-added"><img src="{{asset('assets/img/icons/plus.svg')}}" class="me-2" alt="img">Contact List</a>
      </div> --}}
   </div>
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
                  <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                     <div class="form-group">
                        <a class="btn btn-filters ms-auto"><img src="{{asset('assets/img/icons/search-whites.svg')}}" alt="img"></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="table-responsive">
            <table class="table datanew">
               <thead>
                  <tr>
                      <td>
                       Serial no
                     </td>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                 @foreach($contactlist as $key=>$contact)
                  <tr>
                     <td>
                       {{$loop->iteration}}
                     </td>
                     <td>{{$contact->name}}</td>
                     <td>{{$contact->email}}</td>
                     <td>{{$contact->phone}}</td>
                     <td>{{$contact->subject}}</td>
                     <td>
                        <a href="{{url('admin/viewContact/'.$contact->id)}}" class="btn btn-add btn-sm"><i class="fa fa-eye"></i></a>
                        
                        
                         <a class="me-3 confirm-text delete_record" href="{{url('admin/deleteContact/'.$contact->id)}}" data-table="brands">
                       <img src="{{asset('assets/img/icons/delete.svg')}}" alt="img">
                  </a> 
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection