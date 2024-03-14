<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentReportscontroller extends Controller
{
    public function show_cardex($id){
        $student = Student::find($id);
        dd($student);
        return view('cardex', compact('student'));

    }
}
