@extends('layouts.admin_layouts.admin_layout')
@section('head-tag')
<title>Tatkal Loan || Testimonials</title>
@endsection
@section('content')
<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Testimonial List</h4>
            <h6>Manage your Testimonials</h6>
        </div>
        <div class="page-btn">
            <a href="{{ route('admin.testimonials.create') }}" class="btn btn-added">
                <img src="{{ asset('assets/img/icons/plus.svg') }}" class="me-2" alt="img">Add Testimonial
            </a>
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
            <div class="table-responsive">
                <table class="table datanew">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testimonials as $testimonial)
                        <tr>
                            <td>
                                @if($testimonial->image)
                                <img src="{{ asset('testimonials/' . $testimonial->image) }}" class="img-circle" alt="Testimonial Image" width="50" height="50">
                                @else
                                No Image
                                @endif
                            </td>
                            <td>{{ $testimonial->name }}</td>
                            <td>{{ $testimonial->designition }}</td>
                            <td>{{ $testimonial->review }}</td>
                            <td>
                                <a class="me-3" href="{{ route('admin.testimonials.edit', $testimonial->id) }}">
                                    <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                </a>
                                <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this testimonial?')">
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
