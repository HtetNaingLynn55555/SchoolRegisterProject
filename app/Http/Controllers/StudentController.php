<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentsRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Greate;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students =Student::all();


        return view("home",compact("students"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $greate =Greate::all();


        return view("create",compact('greate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentsRequest $request)
    {

        Student::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "age"=>$request->age,
            "gender"=>$request->gender,
            "grates_id"=>$request->grates_id,
        ]);

        return redirect('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $student = Student::findOrFail($id);

        return view("show",compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $greate = Greate::all();

        $student = Student::findOrFail($id);

        return view('edit',compact('student','greate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentsRequest $request, $id)
    {


        $student = Student::findOrFail($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->age = $request->age;
        $student->gender = $request->gender;
        $student->grates_id = $request->grates_id;

        $student->save();

        return redirect("home");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
       return redirect('home');
    }
}
