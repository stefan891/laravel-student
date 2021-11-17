<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        //returns all the data
        return Student::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation data
        //in the request are data
        $this->validate($request, [
            'full_name'=>'required',
            'course'=>'required',
            'date_of_enrollment'=>'require|date'
        ]);

        //want to store a new student set of data
        $student = new Student();
        $student->full_name = $request->full_name;
        $student->course = $request->course;
        $student->date_of_enrollment = $request->date_of_enrollment;

        //saving data
        $student->save();

        //returning the message and the status
        return response('Successfully created a new student', 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //we want to edit our data
        return Student::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //we want only to update, not to create any new resorces
        $this->validate($request, [
            'full_name'=>'required',
            'course'=>'required',
            'date_of_enrollment'=>'require|date'
        ]);

        //want to update student set of data
        $student = Student::find($id);
        $student->full_name = $request->full_name;
        $student->course = $request->course;
        $student->date_of_enrollment = $request->date_of_enrollment;

        //saving data
        $student->save();

        //returning the message and the status
        return response('Successfully updated a new student', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //deleting a Student
        Student::find($id)->delete();
        return response('Successfully Deleted a new student', 200);

    }
}
