<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data;

class FormController extends Controller
{
    public function showForm()
    {
        $data = Data::all();
        return view('layouts.form', compact('data'));
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Data::create($validatedData);

        return redirect('/')->with('success', 'Form submitted successfully!');
    }
}
