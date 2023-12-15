@extends('layouts.front-master')

@section('content')

    <div class="hero_area">

        <!-- header section strats -->
            @include('components.front.header')
        <!-- end header section -->

        <!-- slider section -->
            @include('components.front.slider')
        <!-- end slider section -->

    </div>

    <!-- book section -->
        @include('components.front.book')
    <!-- end book section -->


    <!-- about section -->
            @include('components.front.about')
    <!-- end about section -->


    <!-- treatment section -->
            @include('components.front.treatment')
    <!-- end treatment section -->

    <!-- team section -->
            @include('components.front.team')
    <!-- end team section -->


    <!-- client section -->
            @include('components.front.client')
    <!-- end client section -->

    <!-- contact section -->
            @include('components.front.contact')
    <!-- end contact section -->

@endsection
