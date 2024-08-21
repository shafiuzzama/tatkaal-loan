@extends('layouts.admin_layouts.admin_layout')
@section('head-tag')
<title>Tatkal Loan || FAQ</title>
<!-- Include CKEditor script -->
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection

@section('content')
<div class="content">
    <div class="page-header">
        <div class="page-title"> 
            <h4>Add FAQ </h4>
            <h6>Create new FAQ</h6>
        </div>
    </div>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form class="property" action="{{ route('settings') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label>FAQ Questions</label>
                            <input type="text" name="questions" placeholder="Add Questions" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label>FAQ Answers</label>
                            <textarea name="answers" placeholder="Add Answers" required></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button class="btn btn-primary me-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Initialize CKEditor -->
<script>
    CKEDITOR.replace('answers');
</script>
@endsection
