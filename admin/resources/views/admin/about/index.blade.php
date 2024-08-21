@extends('layouts.admin_layouts.admin_layout')

@section('head-tag')
<title>Tatkal Loan || About</title>

@endsection

@section('content')
<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>About List</h4>
            <h6>Manage your About sections</h6>
        </div>
        <div class="page-btn">
            <a href="{{ route('admin.about.create') }}" class="btn btn-added"><img src="{{ asset('assets/img/icons/plus.svg') }}" class="me-2" alt="img">Add About</a>
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
                            <img src="{{ asset('assets/img/icons/filter.svg') }}" alt="img">
                            <span><img src="{{ asset('assets/img/icons/closes.svg') }}" alt="img"></span>
                        </a>
                    </div>
                    <div class="search-input">
                        <a class="btn btn-searchset"><img src="{{ asset('assets/img/icons/search-white.svg') }}" alt="img"></a>
                    </div>
                </div>
                <div class="wordset">
                    <ul>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{ asset('assets/img/icons/pdf.svg') }}" alt="img"></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{ asset('assets/img/icons/excel.svg') }}" alt="img"></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{ asset('assets/img/icons/printer.svg') }}" alt="img"></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table datanew">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Heading</th>
                            <th>Sub Heading</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($abouts as $about)
                        <tr>
                            <td><img src="{{ asset('/about/'.$about->image) }}" class="img-circle" alt="About Image" width="50" height="50"> </td>
                            <td>{{ $about->heading }}</td>
                            <td>{{ $about->sub_heading }}</td>
                            <td>{{ $about->name }}</td>
                            <td>{{ $about->status ? 'Active' : 'Inactive' }}</td>
                            <td>
                                <a class="me-3" href="{{ route('admin.about.edit', $about->id) }}">
                                    <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="Edit">
                                </a>
                                <form action="{{ route('admin.about.destroy', $about->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this About?')">
                                        <img src="{{ asset('assets/img/icons/delete.svg') }}" alt="Delete">
                                    </button>
                                </form>
                             
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
