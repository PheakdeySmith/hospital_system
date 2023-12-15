<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\MedicalRecord;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    public function index()
    {
        $data['medicalRecords'] = MedicalRecord::all();
        $data['doctors'] = Doctor::all();
        $data['patients'] = Patient::all();
        $data['appointments'] = Appointment::all();

        return view('dashboard.medical_records.index', $data);
    }

    public function create()
    {
        $data['doctors'] = Doctor::all();
        $data['patients'] = Patient::all();
        $data['appointments'] = Appointment::all();

        return view('dashboard.medical_records.create', $data);
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'patient_id' => 'required|exists:patients,id',
                'doctor_id' => 'required|exists:doctors,id',
                'appointment_id' => 'required|exists:appointments,id',
                'diagnosis' => 'required|string',
                'prescription' => 'required|string',
            ]);

            $medicalRecord = MedicalRecord::create($validatedData);

            if ($medicalRecord) {
                return redirect()->route('medical_records.index')->with('success', 'Medical record updated successfully');
            } else {
                // Handle the case where medical record creation failed
                return redirect()->route('medical_records.index')->with('error', 'Failed to create medical record.');
            }
        } catch (\Exception $e) {
            return redirect()->route('medical_records.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function edit(MedicalRecord $medicalRecord)
    {
        $data['medicalRecord'] = $medicalRecord;
        $data['doctors'] = Doctor::all();
        $data['patients'] = Patient::all();
        $data['appointments'] = Appointment::all();

        return view('dashboard.medical_records.edit', $data);
    }

    public function update(Request $request, MedicalRecord $medicalRecord)
    {
        try {
            $validatedData = $request->validate([
                'patient_id' => 'required|exists:patients,id',
                'doctor_id' => 'required|exists:doctors,id',
                'appointment_id' => 'required|exists:appointments,id',
                'diagnosis' => 'required|string',
                'prescription' => 'required|string',
            ]);

            $medicalRecord->update($validatedData);

            return redirect()->route('medical_records.index')->with('success', 'Medical record updated successfully!');
        } catch (\Exception $e) {
            return redirect()->route('medical_records.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function destroy(MedicalRecord $medicalRecord)
    {

        try {
            $medicalRecord->delete();

            return redirect()->route('medical_records.index')->with('success', 'Medical record deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('medical_records.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
