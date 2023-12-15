<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Patient;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $data['invoices'] = Invoice::with('patient')->get();
        $data['patients'] = Patient::all();
        return view('dashboard.invoices.index', $data);
    }

    public function create()
    {
        $data['patients'] = Patient::all();
        return view('dashboard.invoices.create', $data);
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'patient_id' => 'required|exists:patients,id',
                'total_amount' => 'required|numeric',
                'invoice_date' => 'required|date',
            ]);

            $invoice = Invoice::create($validatedData);

            if ($invoice) {
                return redirect()->route('invoices.index')->with('success', 'Invoice created successfully!');
            } else {
                return redirect()->route('invoices.index')->with('error', 'Failed to create invoice.');
            }
        } catch (\Exception $e) {
            return redirect()->route('invoices.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function edit(Invoice $invoice)
    {
        $data['patients'] = Patient::all();
        $data['invoice'] = $invoice;

        return view('dashboard.invoices.edit', $data);
    }

    public function update(Request $request, Invoice $invoice)
    {
        try {
            $validatedData = $request->validate([
                'patient_id' => 'required|exists:patients,id',
                'total_amount' => 'required|numeric',
                'invoice_date' => 'required|date',
            ]);

            $invoice->update($validatedData);

            return redirect()->route('invoices.index')->with('success', 'Invoice updated successfully!');
        } catch (\Exception $e) {
            return redirect()->route('invoices.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function destroy(Invoice $invoice)
    {
        try {
            $invoice->delete();

            return redirect()->route('invoices.index')->with('success', 'Invoice deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('invoices.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
