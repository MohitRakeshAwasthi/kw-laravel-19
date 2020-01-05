<!-- Global layout -->
@extends('frontend.layout.master')

<!-- Dynamic Tiltile  -->
@section('title', 'Page Title')

<!-- Page Content -->
@section('content')
    
    <!-- Slider  DOM -->
    @include('frontend.home.section.slider')

    <!-- Service Area  DOM -->
    @include('frontend.home.section.service-area')

    <!-- Attorneys  DOM	-->
    @include('frontend.home.section.attorneys')

@stop


