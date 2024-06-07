<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact ('students'));

    }
    public function store(Request $request){
        $valider = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'adress' => 'required|string|max:255',
            'groups_id' => 'required|exists:groups,id' 
        ]);
  
        Student::create($valider);
    }

}