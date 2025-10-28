<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Student;
use App\Models\Subject;


class AttendanceController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function students()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function subjects()
    {
        $subjects = Subject::all();
        return view('subjects.index', compact('subjects'));
    }

    public function index()
    {
        $attendances = Attendance::with(['student','subject'])->orderBy('date','desc')->get();
        return view('attendances.index', compact('attendances'));
    }
}
