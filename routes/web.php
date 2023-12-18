<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SurgeryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\MedicationController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MedicalRecordController;

// Frontend Routes
Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::post('/appointments/store', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/doctor', [FrontController::class, 'doctor'])->name('doctor');
Route::get('/treatment', [FrontController::class, 'treatment'])->name('treatment');
Route::get('/contact', [FrontController::class, 'contact'])->name('front.contact');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/client', [FrontController::class, 'client'])->name('client');

// Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


// Authentication Routes
Route::group(['middleware' => 'web'], function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    // Logout route
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

});


// Patients Routes
Route::prefix('/patients')->middleware('web')->group(function () {
    Route::get('/', [PatientController::class, 'index'])->name('patients.index');
    Route::get('/create', [PatientController::class, 'create'])->name('patients.create');
    Route::post('/store', [PatientController::class, 'store'])->name('patients.store');
    Route::get('/{patient}/edit', [PatientController::class, 'edit'])->name('patients.edit');
    Route::put('/{patient}', [PatientController::class, 'update'])->name('patients.update');
    Route::delete('/{patient}', [PatientController::class, 'destroy'])->name('patients.destroy');
});

// Doctors Routes
Route::prefix('/doctors')->middleware('web')->group(function () {
    Route::get('/', [DoctorController::class, 'index'])->name('doctors.index');
    Route::get('/create', [DoctorController::class, 'create'])->name('doctors.create');
    Route::post('/store', [DoctorController::class, 'store'])->name('doctors.store');
    Route::get('/{doctor}/edit', [DoctorController::class, 'edit'])->name('doctors.edit');
    Route::put('/{doctor}', [DoctorController::class, 'update'])->name('doctors.update');
    Route::delete('/{doctor}', [DoctorController::class, 'destroy'])->name('doctors.destroy');
});

// Departments Routes
Route::prefix('/departments')->middleware('web')->group(function () {
    Route::get('/', [DepartmentController::class, 'index'])->name('departments.index');
    Route::get('/create', [DepartmentController::class, 'create'])->name('departments.create');
    Route::post('/store', [DepartmentController::class, 'store'])->name('departments.store');
    Route::get('/{department}/edit', [DepartmentController::class, 'edit'])->name('departments.edit');
    Route::put('/{department}', [DepartmentController::class, 'update'])->name('departments.update');
    Route::delete('/{department}', [DepartmentController::class, 'destroy'])->name('departments.destroy');
});

// Treatments Routes
Route::prefix('/treatments')->middleware('web')->group(function () {
    Route::get('/', [TreatmentController::class, 'index'])->name('treatments.index');
    Route::get('/create', [TreatmentController::class, 'create'])->name('treatments.create');
    Route::post('/store', [TreatmentController::class, 'store'])->name('treatments.store');
    Route::get('/{treatment}/edit', [TreatmentController::class, 'edit'])->name('treatments.edit');
    Route::put('/{treatment}', [TreatmentController::class, 'update'])->name('treatments.update');
    Route::delete('/{treatment}', [TreatmentController::class, 'destroy'])->name('treatments.destroy');
});

// Appointments Routes
Route::prefix('/appointments')->middleware('web')->group(function () {
    Route::get('/', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::get('/create', [AppointmentController::class, 'create'])->name('appointments.create');
    Route::post('/store', [AppointmentController::class, 'store'])->name('appointments.store');
    Route::get('/{appointment}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');
    Route::put('/{appointment}', [AppointmentController::class, 'update'])->name('appointments.update');
    Route::delete('/{appointment}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');
});

// Medical Records Routes
Route::prefix('/medical-records')->middleware('web')->group(function () {
    Route::get('/', [MedicalRecordController::class, 'index'])->name('medical_records.index');
    Route::get('/create', [MedicalRecordController::class, 'create'])->name('medical_records.create');
    Route::post('/store', [MedicalRecordController::class, 'store'])->name('medical_records.store');
    Route::get('/{medicalRecord}/edit', [MedicalRecordController::class, 'edit'])->name('medical_records.edit');
    Route::put('/{medicalRecord}', [MedicalRecordController::class, 'update'])->name('medical_records.update');
    Route::delete('/{medicalRecord}', [MedicalRecordController::class, 'destroy'])->name('medical_records.destroy');
});

// Medications Routes
Route::prefix('/medications')->middleware('web')->group(function () {
    Route::get('/', [MedicationController::class, 'index'])->name('medications.index');
    Route::get('/create', [MedicationController::class, 'create'])->name('medications.create');
    Route::post('/store', [MedicationController::class, 'store'])->name('medications.store');
    Route::get('/{medication}/edit', [MedicationController::class, 'edit'])->name('medications.edit');
    Route::put('/{medication}', [MedicationController::class, 'update'])->name('medications.update');
    Route::delete('/{medication}', [MedicationController::class, 'destroy'])->name('medications.destroy');
});

// Surgeries Routes
Route::prefix('/surgeries')->middleware('web')->group(function () {
    Route::get('/', [SurgeryController::class, 'index'])->name('surgeries.index');
    Route::get('/create', [SurgeryController::class, 'create'])->name('surgeries.create');
    Route::post('/store', [SurgeryController::class, 'store'])->name('surgeries.store');
    Route::get('/{surgery}/edit', [SurgeryController::class, 'edit'])->name('surgeries.edit');
    Route::put('/{surgery}', [SurgeryController::class, 'update'])->name('surgeries.update');
    Route::delete('/{surgery}', [SurgeryController::class, 'destroy'])->name('surgeries.destroy');
});

// Invoices Routes
Route::prefix('/invoices')->middleware('web')->group(function () {
    Route::get('/', [InvoiceController::class, 'index'])->name('invoices.index');
    Route::get('/create', [InvoiceController::class, 'create'])->name('invoices.create');
    Route::post('/store', [InvoiceController::class, 'store'])->name('invoices.store');
    Route::get('/{invoice}/edit', [InvoiceController::class, 'edit'])->name('invoices.edit');
    Route::put('/{invoice}', [InvoiceController::class, 'update'])->name('invoices.update');
    Route::delete('/{invoice}', [InvoiceController::class, 'destroy'])->name('invoices.destroy');
});

// Contacts Routes
Route::prefix('/contacts')->middleware('web')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/create', [ContactController::class, 'create'])->name('contacts.create');
    Route::post('/store', [ContactController::class, 'store'])->name('contacts.store');
    Route::get('/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::put('/{contact}', [ContactController::class, 'update'])->name('contacts.update');
    Route::delete('/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
});

