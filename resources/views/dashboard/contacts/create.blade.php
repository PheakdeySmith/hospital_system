@extends('layouts.dashboard')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">Create Contact</h2>

                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{ route('contacts.store') }}" enctype="multipart/form-data">
                                @csrf

                                <!-- Input Fields -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Name -->
                                        <div class="form-group">
                                            <label for="name" class="form-label">Name:</label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Email -->
                                        <div class="form-group">
                                            <label for="email" class="form-label">Email:</label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Phone -->
                                        <div class="form-group">
                                            <label for="phone" class="form-label">Phone:</label>
                                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Message -->
                                        <div class="form-group">
                                            <label for="message" class="form-label">Message:</label>
                                            <textarea name="message" class="form-control" id="message" placeholder="Enter message"></textarea>
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
