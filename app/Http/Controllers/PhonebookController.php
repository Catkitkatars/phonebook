<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phonebook;

class PhonebookController extends Controller
{
    public function index()
    {
        $datas = Phonebook::all();

        return view('home', ['datas' => $datas]);
    }

    public function edit() {
        
    }
}
