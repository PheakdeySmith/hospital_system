@extends('layouts.front-master')

@section('content')
    <div class="hero_area">

        <!-- header section strats -->
            @include('components.front.header')
        <!-- end header section -->

    </div>

    <!-- about section -->
            @include('components.front.about')
    <!-- end about section -->

@endsection
