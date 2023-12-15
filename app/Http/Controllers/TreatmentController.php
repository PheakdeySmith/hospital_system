<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function index()
    {
        $data['treatments'] = Treatment::all();
        return view('dashboard.treatments.index', $data);
    }

    public function create()
    {
        return view('dashboard.treatments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $request->file('image')->storeAs('treatment_images', $imageName, 'public');
        }

        Treatment::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $imagePath,
        ]);

        return redirect()->route('treatments.index')->with('success', 'Treatment created successfully');
    }

    public function edit(Treatment $treatment)
    {
        return view('dashboard.treatments.edit', compact('treatment'));
    }

    public function update(Request $request, Treatment $treatment)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $request->file('image')->storeAs('treatment_images', $imageName, 'public');
            $treatment->update([
                'image' => $imagePath,
            ]);
        }

        $treatment->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('treatments.index')->with('success', 'Treatment updated successfully');
    }

    public function destroy(Treatment $treatment)
    {
        $treatment->delete();

        return redirect()->route('treatments.index')->with('success', 'Treatment deleted successfully');
    }
}
