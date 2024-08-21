@extends('layouts.admin_layouts.admin_layout')

@section('head-tag')
<title>Tatkal Loan || Edit About</title>
@endsection

@section('content')
<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>About Management</h4>
            <h6>Edit About</h6>
        </div>
    </div>

    <form class="property" action="{{ route('admin.about.update', $about->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="heading">Heading</label>
                    <input type="text" id="heading" name="heading" class="form-control" placeholder="Enter Heading" value="{{ old('heading', $about->heading) }}">
                    @if ($errors->has('heading'))
                        <span class="text-danger">{{ $errors->first('heading') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="sub_heading">Sub Heading</label>
                    <input type="text" id="sub_heading" name="sub_heading" class="form-control" placeholder="Enter Sub Heading" value="{{ old('sub_heading', $about->sub_heading) }}">
                    @if ($errors->has('sub_heading'))
                        <span class="text-danger">{{ $errors->first('sub_heading') }}</span>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" value="{{ old('name', $about->name) }}">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="our_history"><strong>Our History</strong></label>
                    <textarea class="form-control" id="our_history" name="our_history" rows="4">{{ old('our_history', $about->our_history) }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="our_mission"><strong>Our Mission</strong></label>
                    <textarea class="form-control" id="our_mission" name="our_mission" rows="4">{{ old('our_mission', $about->our_mission) }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="management"><strong>Management</strong></label>
                    <textarea class="form-control" id="management" name="management" rows="4">{{ old('management', $about->management) }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">About Image</label>
                    <input type="file" id="image" name="image" class="form-control">
                    @if ($errors->has('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
            
                    <!-- Display existing image if available -->
                    @if(isset($about->image) && !empty($about->image))
                        <div class="mt-2">
                            <img src="{{ asset('about/' . $about->image) }}" alt="About Image" class="img-thumbnail" style="max-width: 200px;">
                        </div>
                    @endif
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" name="status" class="form-control">
                        <option value="1" {{ (old('status', $about->status) == 1) ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ (old('status', $about->status) == 0) ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="text-right">
            <button type="submit" class="btn btn-primary">Update About</button>
        </div>
    </form>
</div>
@endsection
