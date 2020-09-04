<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Article;
class DashboardController extends Controller
{
    public function index()
    {
        $articles = Article::all()->count();
        $teacher = Teacher::all()->count();
        $students = Student::all()->count();
    
    	return view('admin.index', compact('students', 'teacher', 'articles'));
    }
}
