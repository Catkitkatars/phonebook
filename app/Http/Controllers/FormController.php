<?php

namespace App\Http\Controllers;

use App\Models\Phonebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FormController extends Controller
{
    public function submit(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string'
        ]);

        Phonebook::create($validatedData);

        return Redirect::route('home'); 
    }
}
