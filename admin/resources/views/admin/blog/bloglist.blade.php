@extends('layouts.admin_layouts.admin_layout')
@section('head-tag')
<title>Tatkal Loan|| Blog</title>
@endsection
@section('content')
<div class="content">
   <div class="page-header">
      <div class="page-title">
         <h4>Blog List</h4>
         <h6>Manage your Blog</h6>
      </div>
      <div class="page-btn">
         <a href="{{route('addblog')}}" class="btn btn-added"><img src="{{asset('assets/img/icons/plus.svg')}}" class="me-2" alt="img">Add Blog</a>
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
       
         <div class="table-responsive">
            <table class="table datanew">
               <thead>
                  <tr>
                    <th>Image</th>
                                       <th>Name</th>
                                       <th>Status</th>
                                       <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                    @foreach($bloglist as $key=>$blog)
                                    <tr>
                                       <td><img src="{{asset('/blog/'.$blog->image)}}" class="img-circle" alt="User Image" width="50" height="50"> </td>
                                       <td>{{$blog->name}}</td>
                                       @if($blog->status == 1) 
                                       <td><span class="label-custom label label-default">Active</span></td>
                                       @else
                                       <td><span class="label-custom label label-default">Inactive</span></td>
                                       @endif
                                       <td>
                                       <a class="me-3" href="{{url('admin/editBlog/'.$blog->id)}}">
                                      <img src="{{asset('assets/img/icons/edit.svg')}}" alt="img">
                                       </a>
                                       <a class="me-3 confirm-text delete_record" href="{{url('admin/deleteBlog/'.$blog->id)}}" data-table="brands">
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