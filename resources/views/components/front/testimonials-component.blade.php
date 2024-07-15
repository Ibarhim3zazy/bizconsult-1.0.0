@if ($testimonials->count() > 0)
<div class="container-xxl py-6" id="testimonialials">
    <div class="container">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Testimonial</div>
            <h2 class="mb-5">What Our Clients Say!</h2>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            @foreach ($testimonials as $testimonial)
            <div class="testimonial-item rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>{{ $testimonial->description }}</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle"
                        src="{{ file_exists(trim('storage/testimonials/'.$testimonial->image)) ? asset('storage/testimonials/'.$testimonial->image) : $testimonial->image }}">
                    <div class="ps-3">
                        <h6 class="mb-1">{{ $testimonial->name }}</h6>
                        <small>{{ $testimonial->position }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif