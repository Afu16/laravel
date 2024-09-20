<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentControler extends Controller
{
    //List
    function index()
    {
       $student = Student::all();
       return $student;
    }
    //Show
    function show($nis)
    {
      // return $nis;
      $student =
      Student::where('nis', $nis)->get();
      return $student;
    }
    //Create
    function create(Request $request)
    {
      // dd($request);

      //validasi
      $validated = $request->validate([

      'name' => ['required'],
      'nis' => ['required', 'numeric'],
      'gender' => ['required'],
      'grade' => ['required'],
      'age' => ['required', 'numeric'],
      ]);

      //save db
      $student = Student::create($validated);

      return $student;
    }
     //Update
     function update(Request $request,$id)
     {
       //validasi
      $validated = $request->validate([

        'name' => ['required'],
        'nis' => ['required', 'numeric'],
        'gender' => ['required'],
        'grade' => ['required'],
        'age' => ['required', 'numeric'],
        ]);
        $student = Student::find($id);
        $student ->update($validated);
        $student ->save();
     }

      //Destroy
    function destroy($id)
    {
      $student = Student::find($id);
      $student ->delete();
      return $student;
    }
}

