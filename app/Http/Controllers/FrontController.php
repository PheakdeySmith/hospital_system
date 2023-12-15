<?php

// app/Http/Controllers/FrontController.php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Department;
use App\Models\Appointment;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $data['appointments'] = Appointment::all();
        $data['doctors'] = Doctor::all();
        $data['patients'] = Patient::all();
        $data['departments'] = Department::all();
        return view('front.index', $data);
    }

    public function about()
    {
        return view('front.about');
    }

    public function doctor()
    {
        return view('front.doctor');
    }

    public function client()
    {
        return view('front.client');
    }

    public function treatment()
    {
        return view('front.treatment');
    }

    public function contact()
    {
        return view('front.contact');
    }
}

