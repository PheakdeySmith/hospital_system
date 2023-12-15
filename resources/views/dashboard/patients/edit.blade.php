@extends('layouts.dashboard')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">Edit Patient</h2>

                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{ route('patients.update', $patient->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <!-- Input Fields -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- First Name -->
                                        <div class="form-group">
                                            <label for="first_name" class="form-label">First Name:</label>
                                            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Enter first name" value="{{ old('first_name', $patient->first_name) }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Last Name -->
                                        <div class="form-group">
                                            <label for="last_name" class="form-label">Last Name:</label>
                                            <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter last name" value="{{ old('last_name', $patient->last_name) }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Date of Birth -->
                                        <div class="form-group">
                                            <label for="date_of_birth" class="form-label">Date of Birth:</label>
                                            <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" value="{{ old('date_of_birth', $patient->date_of_birth) }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Gender -->
                                        <div class="form-group">
                                            <label for="gender" class="form-label">Gender:</label>
                                            <input type="text" name="gender" class="form-control" id="gender" placeholder="Enter gender" value="{{ old('gender', $patient->gender) }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Contact Number -->
                                        <div class="form-group">
                                            <label for="contact_number" class="form-label">Contact Number:</label>
                                            <input type="text" name="contact_number" class="form-control" id="contact_number" placeholder="Enter contact number" value="{{ old('contact_number', $patient->contact_number) }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Address -->
                                        <div class="form-group">
                                            <label for="address" class="form-label">Address:</label>
                                            <textarea name="address" class="form-control" id="address" placeholder="Enter address">{{ old('address', $patient->address) }}</textarea>
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
