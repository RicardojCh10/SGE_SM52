<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\App;


class studentReportscontroller extends Controller
{
    public function show_cardex($id){
        $student = Student::find($id);
        // dd($student);}
        $data=[
            'title'=>'Reporte Del Estudiante',
            'details'=>$student
        ];
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('reports.cardex', $data);
        return $pdf->stream(); 

    }
}
