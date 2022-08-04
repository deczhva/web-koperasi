<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index(Request $request)
    {
        if($request->has('search')){
            $data['students'] = Student::where('name', 'LIKE', '%' .$request->search. '%')->paginate(5);
        } else if ($request->has('asc')) {
            $data['students'] = Student::orderBy('name', 'asc')->paginate(5);
        }  else if ($request->has('desc')) {
            $data['students'] = Student::orderBy('name', 'desc')->paginate(5);
        } else {
            $data['students'] = Student::paginate(5);
        }
        return view('students.index', $data);

           
        // }
        
        // $students = Student::latest()->paginate(5);
      
        // return view('students.index',compact('students'))
        //     ->with( (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        return view('students.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'jk' => 'required',
            'nis' => 'required',
            'kelas' => 'required'
        ]);
      
        Student::create($request->all());
       
        return redirect()->route('students.index')
                        ->with('success','Data siswa berhasil ditambahkan.');
    }
  
    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }
  
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'jk' => 'required',
            'nis' => 'required',
            'kelas' => 'required'
        ]);
      
        $student->update($request->all());
      
        return redirect()->route('students.index')
                        ->with('success','Data siswa berhasil diedit');
    }

    public function destroy(Student $student)
    {
        $student->delete();
       
        return redirect()->route('students.index')
                        ->with('success','Data siswa berhasil dihapus');
    }
}