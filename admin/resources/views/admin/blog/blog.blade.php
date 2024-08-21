@extends('layouts.admin_layouts.admin_layout')
@section('head-tag')
<title>Tatkal Loan|| Blog</title>
@endsection
@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Blog Management</h4>
                <h6>Add/Update Blog</h6>
            </div>
        </div>
        
       <form class="property" action="{{route('blogs')}}" method="post" enctype="multipart/form-data">
                            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                        <label>Heding</label>
                                        <input type="text" name="heading" class="form-control" placeholder="Enter Heding">
                                        @if ($errors->has('heading'))
                                        <span class="text-danger">{{ $errors->first('heading') }}</span>
                                        @endif
                                    </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                           <div class="form-group">
                                        <label>Sub Heding</label>
                                        <input type="text" name="sub_heading" class="form-control" placeholder="Enter Sub Heding">
                                        @if ($errors->has('sub_heading'))
                                        <span class="text-danger">{{ $errors->first('sub_heading') }}</span>
                                        @endif
                                    </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                        @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                        </div>
                       <div class="col-lg-6 col-sm-6 col-12">
                         <div class="form-group">
                                        <label><strong>Short Description</strong></label>
                                        <textarea class="ckeditor form-control" name="short_description" placeholder="Short Description"></textarea>
                                    </div>
                         </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="col-sm-12">
                                    <div class="form-group">
                                        <label><strong>Description</strong></label>
                                        <textarea class="ckeditor form-control" name="description" placeholder="Description"></textarea>
                                    </div>
                                </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-12">
                         <div class="form-group">
                      <label>Blog image</label>
                      <div class="image-upload">
                        <input type="file" name="image" required>
                        <input type="hidden" name="old_image">
                        @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                        @endif
                        <div class="image-uploads">
                           <img src="{{asset('assets/img/icons/upload.svg')}}" alt="img">
                           <h4>Drag and drop a file to upload</h4>
                        </div>
                        </div>
                        </div>
                        </div>
                       
                        <div class="col-lg-6 col-sm-6 col-12">
                             <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>

                        </div>
                        
                       <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary" value="submit">Save</button>
                            <!--<a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
