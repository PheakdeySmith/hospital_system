@extends('layouts.front-master')

@section('content')

    <div class="hero_area">

        <!-- header section strats -->
            @include('components.front.header')
        <!-- end header section -->

    </div>

    <!-- treatment section -->
            @include('components.front.treatment')
    <!-- end treatment section -->

    <!-- team section -->
            @include('components.front.team')
    <!-- end team section -->

@endsection
