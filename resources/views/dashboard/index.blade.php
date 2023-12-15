@extends('layouts.dashboard')

@section('content')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">overview</h2>
                        <button class="au-btn au-btn-icon au-btn--blue">
                            <i class="zmdi zmdi-plus"></i>add item</button>
                    </div>
                </div>
            </div>

            {{-- Card Start --}}
            @include('components.dashboard.card')
            {{-- Card End --}}


            <div class="row">

                {{-- Recent Report Start --}}
                @include('components.dashboard.recent_report')
                {{-- Recent Report End --}}

                {{-- Chart by Percent Start --}}
                @include('components.dashboard.chart_by_percent')
                {{-- Chart by Percent End --}}

            </div>

            {{-- Item Table Start --}}
            @include('components.dashboard.item_table')
            {{-- Item Table End --}}

            @endsection
