@extends('front.master')

@section('service-active', 'active')

@section('title', 'service')

@section('hero')
<x-hero-section title="Service" subtitle="Service"></x-hero-section>
@endsection

@section('content')

<!-- Service Start -->
<x-front.services-component></x-front.services-component>
<!-- Service End -->


<!-- Testimonial Start -->
<x-front.testimonials-component></x-front.testimonials-component>
<!-- Testimonial End -->
@endsection