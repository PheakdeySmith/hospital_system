@extends('layouts.dashboard')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">@yield('title', 'Create Surgery')</h2>

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
                            <form method="post" action="{{ isset($surgery) ? route('surgeries.update', $surgery->id) : route('surgeries.store') }}" enctype="multipart/form-data">
                                @if(isset($surgery))
                                    @method('PUT')
                                @endif
                                @csrf

                                <!-- Input Fields -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Patient -->
                                        <div class="form-group">
                                            <label for="patient_id" class="form-label">Patient:</label>
                                            <select name="patient_id" class="form-control" id="patient_id">
                                                @foreach($patients as $patient)
                                                    <option value="{{ $patient->id }}">{{ $patient->first_name }} {{ $patient->last_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Surgeon -->
                                        <div class="form-group">
                                            <label for="surgeon_id" class="form-label">Surgeon:</label>
                                            <select name="surgeon_id" class="form-control" id="surgeon_id">
                                                @foreach($doctors as $doctor)
                                                    <option value="{{ $doctor->id }}">{{ $doctor->first_name }} {{ $doctor->last_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Surgery Date -->
                                        <div class="form-group">
                                            <label for="surgery_date" class="form-label">Surgery Date:</label>
                                            <input type="date" name="surgery_date" class="form-control" id="surgery_date" value="{{ isset($surgery->surgery_date) ? $surgery->surgery_date : old('surgery_date') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Procedure Name -->
                                        <div class="form-group">
                                            <label for="procedure_name" class="form-label">Procedure Name:</label>
                                            <input type="text" name="procedure_name" class="form-control" id="procedure_name" value="{{ isset($surgery->procedure_name) ? $surgery->procedure_name : old('procedure_name') }}">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
