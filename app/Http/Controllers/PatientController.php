<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $data['patients'] = Patient::all();
        return view('dashboard.patients.index', $data);
    }

    public function create()
    {
        return view('dashboard.patients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string|max:10',
            'contact_number' => 'required|string|max:20',
            'address' => 'required|string',
        ]);

        Patient::create($request->all());

        return redirect()->route('patients.index')->with('success', 'Patient created successfully');
    }

    public function edit(Patient $patient)
    {
        return view('dashboard.patients.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string|max:10',
            'contact_number' => 'required|string|max:20',
            'address' => 'required|string',
        ]);

        $patient->update($request->all());

        return redirect()->route('patients.index')->with('success', 'Patient updated successfully');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()->route('patients.index')->with('success', 'Patient deleted successfully');
    }
}
