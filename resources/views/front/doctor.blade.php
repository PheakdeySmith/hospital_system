@extends('layouts.front-master')

@section('content')

    <div class="hero_area">

        <!-- header section strats -->
            @include('components.front.header')
        <!-- end header section -->

    </div>

    <!-- team section -->
            @include('components.front.team')
    <!-- end team section -->

@endsection
