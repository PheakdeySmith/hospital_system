@extends('layouts.dashboard')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">@yield('title', 'Edit Invoice')</h2>

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
                            <form method="post" action="{{ route('invoices.update', $invoice->id) }}" enctype="multipart/form-data">
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
                                                    <option value="{{ $patient->id }}" {{ $invoice->patient_id == $patient->id ? 'selected' : '' }}>{{ $patient->first_name }} {{ $patient->last_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Total Amount -->
                                        <div class="form-group">
                                            <label for="total_amount" class="form-label">Total Amount:</label>
                                            <input type="text" name="total_amount" class="form-control" id="total_amount" value="{{ $invoice->total_amount }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Invoice Date -->
                                        <div class="form-group">
                                            <label for="invoice_date" class="form-label">Invoice Date:</label>
                                            <input type="date" name="invoice_date" class="form-control" id="invoice_date" value="{{ $invoice->invoice_date }}">
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
