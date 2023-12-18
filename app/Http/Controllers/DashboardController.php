<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Invoice;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalPatients = Patient::count();
        $totalAppointments = Appointment::count();

        $totalEarnings = DB::table('invoices')->sum('total_amount');

        $chartData = [
            'Users' => $totalUsers,
            'Patients' => $totalPatients,
            'Appointments' => $totalAppointments,
        ];

        return view('dashboard.index', compact('totalUsers', 'totalPatients', 'totalAppointments', 'totalEarnings', 'chartData'));
    }
}
