@extends('layouts.admin_layouts.admin_layout')
@section('head-tag')
<title>Tatkal Loan|| FAQ</title>
<!-- Include CKEditor Script -->
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
@endsection
@section('content')
<div class="content">
	<div class="page-header">
		<div class="page-title">
			<h4>FAQ Edit</h4>
			<h6>Update your FAQ</h6>
		</div>
	</div>
	@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
        <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">-->
        <!--    <span aria-hidden="true">&times;</span>-->
        <!--</button>-->
    </div>
@endif
	<div class="card">
		<div class="card-body">
			<form class="property" action="{{ route('setting_update', $setting->id ?? 'N/A') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-lg-3 col-sm-6 col-12">
						<div class="form-group">
							<label>FAQ Questions</label>
							<input type="text" value="{{ $setting->questions ?? 'N/A' }}" name="questions">
							<input type="hidden" value="{{ $setting->id ?? 'N/A' }}" name="id">
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">
							<label>FAQ Answers</label>
							<textarea name="answers">{{ $setting->answers ?? 'N/A' }}</textarea>
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
