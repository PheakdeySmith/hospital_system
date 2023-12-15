@extends('layouts.dashboard')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">@yield('title', 'Edit Medication')</h2>

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
                            <form method="post" action="{{ route('medications.update', $medication->id) }}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf

                                <!-- Input Fields -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Medical Record -->
                                        <div class="form-group">
                                            <label for="record_id" class="form-label">Medical Record:</label>
                                            <select name="record_id" class="form-control" id="record_id">
                                                @foreach($medicalRecords as $record)
                                                    <option value="{{ $record->id }}" {{ $record->id === $medication->record_id ? 'selected' : '' }}>{{ $record->id }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Medication Name -->
                                        <div class="form-group">
                                            <label for="med_name" class="form-label">Medication Name:</label>
                                            <input type="text" name="med_name" class="form-control" id="med_name" value="{{ $medication->med_name }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Dosage -->
                                        <div class="form-group">
                                            <label for="dosage" class="form-label">Dosage:</label>
                                            <input type="text" name="dosage" class="form-control" id="dosage" value="{{ $medication->dosage }}">
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
