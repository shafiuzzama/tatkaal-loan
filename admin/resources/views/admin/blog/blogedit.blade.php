@extends('layouts.admin_layouts.admin_layout')
@section('head-tag')
<title>Tatkal Loan|| Blog Edit</title>
@endsection
@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Blog Management</h4>
                <h6>Add/Update Blog</h6>
            </div>
        </div>
        
       <form class="property" action="{{route('blog_update')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                            <label>Heding</label>
                                            <input type="text" name="heading" class="form-control" placeholder="Enter Heding" value="@if(!empty($blog->heading)) {{$blog->heading}} @endif">
                                            <input name="id" class="form-control" type="hidden" value="@if(!empty($blog->id)) {{$blog->id}} @endif">
                                            @if ($errors->has('heading'))
                                                <span class="text-danger">{{ $errors->first('heading') }}</span>
                                            @endif
                                        </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                           <div class="form-group">
                                            <label>Sub Heding</label>
                                            <input type="text" name="sub_heading" class="form-control" value="@if(!empty($blog->sub_heading)) {{$blog->sub_heading}} @endif">
                                        </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="col-sm-12">
                                   <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" value="@if(!empty($blog->name)) {{$blog->name}} @endif">
                                        </div>
                                </div>
                        </div>
                       <div class="col-lg-6 col-sm-6 col-12">
                         <div class="form-group">
                                            <label><strong>Short Description</strong></label>
                                            <textarea class="ckeditor form-control" name="short_description">@if(!empty($blog->short_description)) {{$blog->short_description}} @endif</textarea>
                                        </div> 
                         </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="col-sm-12">
                                    <div class="form-group">
                                            <label><strong>Description</strong></label>
                                            <textarea class="ckeditor form-control" name="description">@if(!empty($blog->description)) {{$blog->description}} @endif</textarea>
                                        </div> 
                                </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-12">
                         <div class="form-group">
                              @if ($errors->has('image'))
                                                <span class="text-danger">{{ $errors->first('image') }}</span>
                                            @endif
                      <label>Blog image</label>
                      <div class="image-upload">
                        <input type="file" name="image">
                        <input type="hidden" name="old_image">
                    @if(!empty($blog->image))
                                                <img src="{{asset('/blog/'.$blog->image)}}" width="100px" height="100px">
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
                            <button type="submit" name="submit" class="btn btn-primary" value="submit">Save</button>
                            <!--<a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
       @endsection