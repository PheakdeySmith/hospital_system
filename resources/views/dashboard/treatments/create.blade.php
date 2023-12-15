@extends('layouts.dashboard')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">Create Treatment</h2>

                    <div class="card">
                        <div class="card-body">
                            <!-- Add the form tag and specify the action and method -->
                            <form method="post" action="{{ isset($treatment) ? route('treatments.update', $treatment->id) : route('treatments.store') }}" enctype="multipart/form-data">
                                @if(isset($treatment))
                                    @method('PUT')
                                @endif
                                @csrf <!-- Add the CSRF token -->

                                <div class="row">
                                    <!-- Left Column - Input Fields -->
                                    <div class="col-md-8">
                                        <!-- Name -->
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name:</label>
                                            <input type="text" name="name" class="form-control" id="name" value="{{ isset($treatment) ? $treatment->name : old('name') }}" placeholder="Enter name">
                                        </div>

                                        <!-- Description -->
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description:</label>
                                            <textarea name="description" class="form-control" id="description" rows="3" placeholder="Enter description">{{ isset($treatment) ? $treatment->description : old('description') }}</textarea>
                                        </div>

                                    </div>

                                    <!-- Right Column - Placeholder for Image -->
                                    <div class="col-md-4">
                                        <div>
                                            <div class="mb-4 d-flex justify-content-center">
                                                <img id="selectedImage" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" alt="example placeholder" style="width: 300px;" />
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <div class="btn btn-primary btn-rounded">
                                                    <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                                                    <input type="file" name="image" class="form-control d-none" id="customFile1" onchange="displaySelectedImage(event, 'selectedImage')" />
                                                </div>
                                            </div>
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
