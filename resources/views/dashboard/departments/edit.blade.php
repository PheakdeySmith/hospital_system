@extends('layouts.dashboard')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">Edit Department</h2>

                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{ route('departments.update', $department->id) }}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf

                                <!-- Input Fields -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Department Name -->
                                        <div class="form-group">
                                            <label for="department_name" class="form-label">Department Name:</label>
                                            <input type="text" name="department_name" class="form-control" id="department_name" value="{{ $department->department_name }}" placeholder="Enter department name">
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
