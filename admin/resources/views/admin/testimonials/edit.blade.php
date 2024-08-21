@extends('layouts.admin_layouts.admin_layout')
@section('head-tag')
<title>Tatkal Loan || Edit Testimonial</title>
@endsection
@section('content')
<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Edit Testimonial</h4>
            <h6>Update testimonial details</h6>
        </div>
    </div>

    <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" value="{{ $testimonial->name }}">
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="designition">Designation</label>
                            <input type="text" id="designition" name="designition" class="form-control" placeholder="Enter Designation" value="{{ $testimonial->designition }}">
                            @if ($errors->has('designition'))
                            <span class="text-danger">{{ $errors->first('designition') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="review">Review</label>
                            <textarea id="review" name="review" class="form-control" rows="5" placeholder="Enter Review">{{ $testimonial->review }}</textarea>
                            @if ($errors->has('review'))
                            <span class="text-danger">{{ $errors->first('review') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" id="image" name="image" class="form-control">
                            @if ($testimonial->image)
                            <img src="{{ asset('testimonials/' . $testimonial->image) }}" alt="Current Image" width="100" class="mt-2">
                            @endif
                            @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection
