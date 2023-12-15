@extends('layouts.dashboard')
@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">Surgery</h2>
                    @include('dashboard.surgeries.filter')
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive m-b-40">
                              @include('dashboard.surgeries.list')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
