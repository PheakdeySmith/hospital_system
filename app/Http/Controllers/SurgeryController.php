<?php

namespace App\Http\Controllers;

use App\Models\Surgery;
use App\Models\Patient;
use App\Models\Doctor;
use Illuminate\Http\Request;

class SurgeryController extends Controller
{
    public function index()
    {
        $data['surgeries'] = Surgery::all();
        $data['doctors'] = Doctor::all();
        $data['patients'] = Patient::all();
        return view('dashboard.surgeries.index', $data);
    }

    public function create()
    {
        $data['doctors'] = Doctor::all();
        $data['patients'] = Patient::all();

        return view('dashboard.surgeries.create', $data);
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'patient_id' => 'required|exists:patients,id',
                'surgeon_id' => 'required|exists:doctors,id',
                'surgery_date' => 'required|date',
                'procedure_name' => 'required|string',
            ]);

            $surgery = Surgery::create($validatedData);

            if ($surgery) {
                return redirect()->route('surgeries.index')->with('success', 'Surgery created successfully!');
            } else {
                return redirect()->route('surgeries.index')->with('error', 'Failed to create surgery.');
            }
        } catch (\Exception $e) {
            return redirect()->route('surgeries.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function edit(Surgery $surgery)
    {
        $data['doctors'] = Doctor::all();
        $data['patients'] = Patient::all();
        $data['surgery'] = $surgery;

        return view('dashboard.surgeries.edit', $data);
    }

    public function update(Request $request, Surgery $surgery)
    {
        try {
            $validatedData = $request->validate([
                'patient_id' => 'required|exists:patients,id',
                'surgeon_id' => 'required|exists:doctors,id',
                'surgery_date' => 'required|date',
                'procedure_name' => 'required|string',
            ]);

            $surgery->update($validatedData);

            return redirect()->route('surgeries.index')->with('success', 'Surgery updated successfully!');
        } catch (\Exception $e) {
            return redirect()->route('surgeries.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function destroy(Surgery $surgery)
    {
        try {
            $surgery->delete();

            return redirect()->route('surgeries.index')->with('success', 'Surgery deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('surgeries.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
