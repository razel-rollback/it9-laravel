<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('register');
    }

    // Handle the form submission
    public function handleForm(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        // Handle successful form submission, for example, saving the user or displaying success
        // For this example, we just return a success view with the submitted data
        return view('success', ['data' => $validated]);
    }
}
