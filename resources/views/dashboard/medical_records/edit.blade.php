@extends('layouts.dashboard')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">@yield('title', 'Edit Medical Record')</h2>

                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="post" action="{{ route('medical_records.update', $medicalRecord->id) }}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf

                                <!-- Input Fields -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Patient -->
                                        <div class="form-group">
                                            <label for="patient_id" class="form-label">Patient:</label>
                                            <select name="patient_id" class="form-control" id="patient_id">
                                                @foreach($patients as $patient)
                                                    <option value="{{ $patient->id }}" {{ $medicalRecord->patient_id == $patient->id ? 'selected' : '' }}>{{ $patient->first_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Doctor -->
                                        <div class="form-group">
                                            <label for="doctor_id" class="form-label">Doctor:</label>
                                            <select name="doctor_id" class="form-control" id="doctor_id">
                                                @foreach($doctors as $doctor)
                                                    <option value="{{ $doctor->id }}" {{ $medicalRecord->doctor_id == $doctor->id ? 'selected' : '' }}>{{ $doctor->first_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Appointment -->
                                        <div class="form-group">
                                            <label for="appointment_id" class="form-label">Appointment:</label>
                                            <select name="appointment_id" class="form-control" id="appointment_id">
                                                @foreach($appointments as $appointment)
                                                    <option value="{{ $appointment->id }}" {{ $medicalRecord->appointment_id == $appointment->id ? 'selected' : '' }}>{{ $appointment->id }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <!-- Diagnosis -->
                                        <div class="form-group">
                                            <label for="diagnosis" class="form-label">Diagnosis:</label>
                                            <textarea name="diagnosis" class="form-control" id="diagnosis" rows="3">{{ $medicalRecord->diagnosis }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <!-- Prescription -->
                                        <div class="form-group">
                                            <label for="prescription" class="form-label">Prescription:</label>
                                            <textarea name="prescription" class="form-control" id="prescription" rows="3">{{ $medicalRecord->prescription }}</textarea>
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
