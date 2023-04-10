<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

/**
 * Student 
 */
class StudentController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // data 
        $students = Student::select(
                'students.id', 
                'students.name', 
                'students.birthday', 
                'students.email', 
                'students.phone', 
                'students.address', 
                'students.city_id', 
                'cities.name AS city_name'
            )
            ->rightJoin("cities", "cities.id", "city_id")
            ->orderBy('students.name', 'asc')
            ->paginate(10)
        ;
        
        // pages for navigation 
        $nb_pages = $students->lastPage();
        
        // render 
        return view(
            'student.index', [
                'students' => $students, 
                'nb_pages' => $nb_pages, 
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        // data 
        $cities = City::all();
        
        // render 
        return view(
            'student.create', [
                'cities' => $cities, 
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // validate 
        $request->validate( [
            'name' => 'required|min:2|max:50', 
            'birthday' => 'required', 
            'email' => 'required|email|max:60|unique:students',
            'phone' => 'required|min:6|max:20|unique:students|regex:/^[\d\s\-]+$/', 
            'address' => 'required|max:70', 
            'city_id' => 'required', 
        ] );
        
        // format 
        $student = new Student;
        $student->fill($request->all());
        
        // save 
        $student->save();
        
        // redirect 
        return redirect(
            route('student.show', $student->id)
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student) {
        // data 
        $stu = Student::select(
                'students.id', 
                'students.name', 
                'students.birthday', 
                'students.email', 
                'students.phone', 
                'students.address', 
                'students.city_id', 
                'cities.name AS city_name'
            )
            ->where('students.id', $student['id'])
            ->rightJoin("cities", "cities.id", "city_id")
            ->get()
        ;
        
        // render 
        return view(
            'student.show', [
                'stu' => $stu[0], 
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student) {
        // data 
        $stu = Student::select(
                'students.id', 
                'students.name', 
                'students.birthday', 
                'students.email', 
                'students.phone', 
                'students.address', 
                'students.city_id', 
                'cities.name AS city_name'
            )
            ->where('students.id', $student['id'])
            ->rightJoin("cities", "cities.id", "city_id")
            ->get()
        ;
        
        // data 
        $cities = City::all();
        
        // render 
        return view(
            'student.edit', [
                'stu' => $stu[0], 
                'cities' => $cities, 
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student) {
        // validate 
        $request->validate( [
            Rule::unique('students')->ignore($request->id, 'id'), 
            'name' => 'required|min:2|max:50', 
            'birthday' => 'required', 
            'email' => 'required|email|max:60', 
            'phone' => 'required|min:6|max:20', 
            'address' => 'required|max:70', 
            'city_id' => 'required', 
        ] );
        
        // format 
        $student->fill($request->all());
        
        // save 
        $student->save();
        
        // redirect 
        return redirect(
            route('student.show', $student->id)
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student) {
        // delete 
        $student->delete();
        
        // redirect 
        return redirect(
            route('student')
        );
    }

}
