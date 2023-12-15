<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $data['doctors'] = Doctor::all();
        return view('dashboard.doctors.index', $data);
    }

    public function create()
    {
        return view('dashboard.doctors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
        ]);

        Doctor::create($request->all());

        return redirect()->route('doctors.index')->with('success', 'Doctor created successfully');
    }

    public function edit(Doctor $doctor)
    {
        return view('dashboard.doctors.edit', compact('doctor'));
    }

    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
        ]);

        $doctor->update($request->all());

        return redirect()->route('doctors.index')->with('success', 'Doctor updated successfully');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();

        return redirect()->route('doctors.index')->with('success', 'Doctor deleted successfully');
    }
}
