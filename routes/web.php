<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\PhonebookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PhonebookController::class, 'index'])->name('home');

Route::get('/edit', function(Request $request) {
    $action = $request->get;
    // $request = $_GET;
    // $action = $request['action'];
    // $id = $request->input('id');

    dd($action);

    if($action === 'update') {
        return view('update');
    }
    if($action === 'delete') {
        return view('home');
    }

    return view('edit');
});


Route::post('/submit-form', [FormController::class, 'submit'])->name('form.submit');
