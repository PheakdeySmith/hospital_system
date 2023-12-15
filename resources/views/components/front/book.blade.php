<section class="book_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('appointments.store') }}" method="post">
                    @csrf
                    <h4>
                        BOOK <span>APPOINTMENT</span>
                    </h4>
                    <div class="form-row">
                        <div class="form-group col-lg-4">
                            <label for="inputPatientName">Patient Name</label>
                            <select name="patient_id" class="form-control wide" id="inputPatientId">
                                @foreach($patients as $patient)
                                    <option value="{{ $patient->id }}">{{ $patient->first_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDoctorId">Doctor</label>
                            <select name="doctor_id" class="form-control wide" id="inputDoctorId">
                                @foreach($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->first_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDepartmentId">Department</label>
                            <select name="department_id" class="form-control wide" id="inputDepartmentId">
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-4">
                            <label for="inputPhone">Phone Number</label>
                            <input type="number" class="form-control" id="inputPhone" name="phone_number"
                                placeholder="XXXXXXXXXX">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputSymptoms">Symptoms</label>
                            <input type="text" class="form-control" id="inputSymptoms" name="symptoms" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDate">Choose Date </label>
                            <div class="input-group date" id="inputDate" data-date-format="yyyy-mm-dd">
                                <input type="text" class="form-control" name="appointment_date" readonly>
                                <span class="input-group-addon date_icon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="form_source" value="{{ request()->routeIs('front.index') ? 'front' : 'dashboard' }}">
                    <div class="btn-box">
                        <button type="submit" class="btn">Submit Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
