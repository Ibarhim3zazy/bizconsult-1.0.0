@extends('front.master')

@section('contact-active', 'active')

@section('title', 'contact')

@section('hero')
<x-hero-section title="Contact US" subtitle="Contact"></x-hero-section>
@endsection

@section('content')

<!-- Contact Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Contact Us</div>
            <h2 class="mb-5">If You Have Any Query, Please Feel Free Contact Us</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                <p class="text-center mb-4">The contact form is currently inactive. Get a functional and working contact
                    form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're
                    done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                <x-alert></x-alert>
                <form action="{{ route('front.contact.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" name="name"
                                    value="{{ old('name') }}">
                                <label for="name">Your Name</label>
                                <x-validation-error field="name"></x-validation-error>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email"
                                    name="email" value="{{ old('email') }}">
                                <label for="email">Your Email</label>
                                <x-validation-error field="email"></x-validation-error>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subject"
                                    name="subject" value="{{ old('subject') }}">
                                <label for="subject">Subject</label>
                                <x-validation-error field="subject"></x-validation-error>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message"
                                    style="height: 150px" name="message">{{ old('message') }}</textarea>
                                <label for="message">Message</label>
                                <x-validation-error field="message"></x-validation-error>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection