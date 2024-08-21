@extends('layouts.front_layouts')

@section('content')

 <!-- FAQs Start -->
 <div class="container-fluid faq py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="pb-5">
                    <h4 class="text-primary">FAQs</h4>
                    <h1 class="display-4">Get the Answers to Common Questions</h1>
                </div>
                <div class="accordion bg-light rounded p-4" id="accordionExample">
                    @foreach($faqs as $index => $faq)
                        <div class="accordion-item border-0 mb-4">
                            <h2 class="accordion-header" id="heading{{ $index }}">
                                <button class="accordion-button text-dark fs-5 fw-bold rounded-top {{ $index == 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index == 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                                    {{ $faq->questions }}
                                </button>
                            </h2>
                            <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample">
                                <div class="accordion-body my-2">
                                    <h5>Dolor sit amet consectetur adipisicing elit.</h5>
                                    <p>{{ strip_tags($faq->answers) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <div class="faq-img RotateMoveRight rounded">
                    <img src="{{asset('assets/img/faq-img.jpg') }}" class="img-fluid rounded w-100" alt="Image">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->
@endsection
