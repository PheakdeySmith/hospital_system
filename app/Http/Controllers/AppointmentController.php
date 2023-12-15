<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Department;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $data['appointments'] = Appointment::all();
        $data['doctors'] = Doctor::all();
        $data['patients'] = Patient::all();
        $data['departments'] = Department::all();

        return view('dashboard.appointments.index', $data);
    }

    public function create()
    {
        $data['doctors'] = Doctor::all();
        $data['patients'] = Patient::all();
        $data['departments'] = Department::all();

        return view('dashboard.appointments.create', $data);
    }

    public function store(Request $request)
    {
        $redirectRoute = $request->input('form_source') === 'front' ? 'front.index' : 'appointments.index';
        try {
            $validatedData = $request->validate([
                'patient_id' => 'required|exists:patients,id',
                'doctor_id' => 'required|exists:doctors,id',
                'department_id' => 'required|exists:departments,id',
                'appointment_date' => 'required|date',
            ]);

            $appointment = Appointment::create($validatedData);

            if ($appointment) {
                return redirect()->route($redirectRoute)->with('success', 'Appointment created successfully!');
            } else {
                // Handle the case where appointment creation failed
                return redirect()->route($redirectRoute)->with('error', 'Failed to create appointment.');
            }
        } catch (\Exception $e) {
            return redirect()->route($redirectRoute)->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function edit(Appointment $appointment)
    {
        $data['appointment'] = $appointment;
        $data['doctors'] = Doctor::all();
        $data['patients'] = Patient::all();
        $data['departments'] = Department::all();

        return view('dashboard.appointments.edit', $data);
    }

    public function update(Request $request, Appointment $appointment)
    {
        try {
            $validatedData = $request->validate([
                'patient_id' => 'required|exists:patients,id',
                'doctor_id' => 'required|exists:doctors,id',
                'department_id' => 'required|exists:departments,id',
                'appointment_date' => 'required|date',
            ]);

            $appointment->update($validatedData);

            return redirect()->route('appointments.index')->with('success', 'Appointment updated successfully!');
        } catch (\Exception $e) {
            return redirect()->route('appointments.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function destroy(Appointment $appointment)
    {
        try {
            $appointment->delete();

            return redirect()->route('appointments.index')->with('success', 'Appointment deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('appointments.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
