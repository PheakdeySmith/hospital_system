<?php

namespace App\Http\Controllers;

use App\Models\Medication;
use App\Models\MedicalRecord;
use Illuminate\Http\Request;

class MedicationController extends Controller
{
    public function index()
    {
        $data['medications'] = Medication::all();
        $data['medicalRecords'] = MedicalRecord::all();

        return view('dashboard.medications.index', $data);
    }

    public function create()
    {
        $data['medicalRecords'] = MedicalRecord::all();

        return view('dashboard.medications.create', $data);
    }

    public function store(Request $request)
    {

        try {
            $validatedData = $request->validate([
                'record_id' => 'required|exists:medical_records,id',
                'med_name' => 'required|string',
                'dosage' => 'required|string',
            ]);

            $medication = Medication::create($validatedData);

            if ($medication) {
                return redirect()->route('medications.index')->with('success', 'Medication created successfully!');
            } else {
                return redirect()->route('medications.index')->with('error', 'Failed to create medication.');
            }
        } catch (\Exception $e) {
            return redirect()->route('medications.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function edit(Medication $medication)
    {
        $data['medication'] = $medication;
        $data['medicalRecords'] = MedicalRecord::all();

        return view('dashboard.medications.edit', $data);
    }

    public function update(Request $request, Medication $medication)
    {

        try {
            $validatedData = $request->validate([
                'record_id' => 'required|exists:medical_records,id',
                'med_name' => 'required|string',
                'dosage' => 'required|string',
            ]);

            $medication->update($validatedData);

            return redirect()->route('medications.index')->with('success', 'Medication updated successfully!');
        } catch (\Exception $e) {
            return redirect()->route('medications.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function destroy(Medication $medication)
    {

        try {
            $medication->delete();

            return redirect()->route('medications.index')->with('success', 'Medication deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('medications.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
