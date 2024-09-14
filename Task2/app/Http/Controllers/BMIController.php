<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMIController extends Controller
{
   
    public function index()
{
    return view('bmi-calculator');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:100',
        'age' => 'nullable|integer',
        'gender' => 'nullable|in:Male,Female,Other',
        'height' => 'required|numeric',
        'weight' => 'required|numeric',
    ]);

    $bmi = $request->weight / ($request->height * $request->height);

    $bmiUser = BMIUser::create([
        'name' => $request->name,
        'age' => $request->age,
        'gender' => $request->gender,
    ]);

    BMIRecord::create([
        'bmi_user_id' => $bmiUser->id,
        'height' => $request->height,
        'weight' => $request->weight,
        'bmi' => $bmi,
    ]);

    return redirect()->back()->with('success', 'BMI record created successfully!');
}

}