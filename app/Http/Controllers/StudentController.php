<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function student()
    {
        return view('student');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
            'rollno' => 'required|max:191',
            'contact' => 'required|max:191',
            'email' => 'required|email|max:191',
            'year' => 'required|max:191'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }
        else
        {
            $student = new Student();
            $student->name = $request->input('name');
            $student->rollno = $request->input('rollno');
            $student->contact = $request->input('contact');
            $student->email = $request->input('email');
            $student->year = $request->input('year');
            $student->save();
            return response()->json([
                'status' => 200,
                'message'=>'Student Added Successfully',
            ]);
        }
    }
}
