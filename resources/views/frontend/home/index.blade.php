@extends('frontend.layout.master')

<!-- Dynamic Tiltile  -->
@section('title', 'Home Page')

<!-- Page Content -->
@section('content')
    
<!-- Slider  DOM -->
@include('frontend.home.section.slider')

<!-- Attorneys  DOM -->
@include('frontend.home.section.attorneys')

<!-- Service Area DOM -->
@include('frontend.home.section.service-area')

<!-- Legal News Area DOM -->
@include('frontend.home.section.legal-news')

<!-- Legal Service Area DOM -->
@include('frontend.home.section.legal-services')

<!-- Legal Service Area DOM -->
@include('frontend.home.section.about-us')

@stop


