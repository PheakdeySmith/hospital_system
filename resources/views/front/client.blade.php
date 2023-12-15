@extends('layouts.front-master')

@section('content')

    <div class="hero_area">

        <!-- header section strats -->
            @include('components.front.header')
        <!-- end header section -->

    </div>

    <!-- client section -->
            @include('components.front.client')
    <!-- end client section -->

@endsection
