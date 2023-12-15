@extends('layouts.dashboard')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">Edit Doctor</h2>

                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{ route('departments.update', $doctor->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <!-- Input Fields -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- First Name -->
                                        <div class="form-group">
                                            <label for="first_name" class="form-label">First Name:</label>
                                            <input type="text" name="first_name" class="form-control" id="first_name" value="{{ $doctor->first_name }}" placeholder="Enter first name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Last Name -->
                                        <div class="form-group">
                                            <label for="last_name" class="form-label">Last Name:</label>
                                            <input type="text" name="last_name" class="form-control" id="last_name" value="{{ $doctor->last_name }}" placeholder="Enter last name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Specialization -->
                                        <div class="form-group">
                                            <label for="specialization" class="form-label">Specialization:</label>
                                            <input type="text" name="specialization" class="form-control" id="specialization" value="{{ $doctor->specialization }}" placeholder="Enter specialization">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Contact Number -->
                                        <div class="form-group">
                                            <label for="contact_number" class="form-label">Contact Number:</label>
                                            <input type="text" name="contact_number" class="form-control" id="contact_number" value="{{ $doctor->contact_number }}" placeholder="Enter contact number">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
