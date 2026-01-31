<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations = Registration::with(['user', 'course'])->get();
        return view('admin.registrations.index', compact('registrations'));
    }

    public function destroy(Registration $registration)
    {
        $registration->delete(); // Requirement 7d: Cancel registration
        return redirect()->back()->with('success', 'Registration cancelled.');
    }
}